<?php

namespace elinoix\shopBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Payum\Core\Request\BinaryMaskStatusRequest;
/**
 * Commande controller.
 *
 */
class PaiementController extends Controller {

    public function prepareAction()
    {
        $paymentName = 'paypal_express_checkout_and_doctrine_orm';

        $storage = $this->get('payum')->getStorageForClass(
            'elinoix\shopBundle\Entity\PaymentDetails',
            $paymentName
        );

        /** @var \Acme\PaymentBundle\Entity\PaymentDetails $paymentDetails */
        $paymentDetails = $storage->createModel();
        $paymentDetails['PAYMENTREQUEST_0_CURRENCYCODE'] = 'USD';
        $paymentDetails['PAYMENTREQUEST_0_AMT'] = 1.23;
        $storage->updateModel($paymentDetails);

        $captureToken = $this->get('payum.security.token_factory')->createCaptureToken(
            $paymentName,
            $paymentDetails,
            'payment_done' // the route to redirect after capture;
        );

        $paymentDetails['INVNUM'] = $paymentDetails->getId();
        $paymentDetails['RETURNURL'] = $captureToken->getTargetUrl();
        $paymentDetails['CANCELURL'] = $captureToken->getTargetUrl();
        $storage->updateModel($paymentDetails);

        return $this->redirect($captureToken->getTargetUrl());
    }
    
    public function captureDoneAction(Request $request)
    {
        $token = $this->get('payum.security.http_request_verifier')->verify($request);

        $payment = $this->get('payum')->getPayment($token->getPaymentName());

        $status = new BinaryMaskStatusRequest($token);
        $payment->execute($status);

        if ($status->isSuccess()) {
            $this->getUser()->addCredits(100);
            $this->get('session')->getFlashBag()->set(
                'success',
                'Payment success. Credits were added'
            );
        } else if ($status->isPending()) {
            $this->get('session')->getFlashBag()->set(
                'success',
                'Payment is still pending. Credits were not added'
            );
        } else {
            $this->get('session')->getFlashBag()->set('error', 'Payment failed');
        }

        return $this->redirect('home');
    }
}

