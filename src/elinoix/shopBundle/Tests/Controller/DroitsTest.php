<?php

namespace elinoix\shopBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DroitsTest extends WebTestCase
{
    var $admin_login = 'admin';
    var $admin_pass  = 'root';
    var $admin_id    = 1;
    
    var $user_login = 'test';
    var $user_pass  = 'lalala';
    var $user_id    = 2;
    
    
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertGreaterThan(0, $crawler->filter('html:contains("Accueil")')->count());
    }
    
    public function testDroitsAdmin()
    {
        $client = static::createClient();
        
        // affichage d'une org
        $crawler = $client->request('GET', '/org/' . $this->admin_id . '/show');

        // redirection auto connexion (besoin d'être connecté)
        $crawler = $client->followRedirect();

        // connexion admin
        $form = $crawler->selectButton('Connexion')->form(array('_username' => $this->admin_login, '_password' => $this->admin_pass));
        $client->submit($form);

        // redirection auto vers login_redirect
        $crawler = $client->followRedirect();
        
        // redirection auto vers org/x/show
        $crawler = $client->followRedirect();
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        $this->assertGreaterThan(0, $crawler->filter('h1:contains("Administrateur")')->count());
        
        // affichage d'une autre org
        $crawler = $client->request('GET', '/org/' . $this->user_id . '/show');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        /*
         * AFFICHAGE DES LISTES
         */
        
        // affichage de la liste des orgs
        $crawler = $client->request('GET', '/org/');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        // affichage de la liste des clients
        $crawler = $client->request('GET', '/client/');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        // affichage de la liste des produits
        $crawler = $client->request('GET', '/produit/');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        /*
         * AFFICHAGE D'UNE ENTITE
         */
        
        // affichage de la liste des clients
        $crawler = $client->request('GET', '/client/1/show');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        // affichage de la liste des produits
        $crawler = $client->request('GET', '/produit/1/show');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        

    }
    
    public function testDroitsUser()
    {
        $client = static::createClient();
        
        // affichage d'une org
        $crawler = $client->request('GET', '/org/' . $this->user_id . '/show');

        // redirection auto connexion (besoin d'être connecté)
        $crawler = $client->followRedirect();

        // connexion admin
        $form = $crawler->selectButton('Connexion')->form(array('_username' => $this->user_login, '_password' => $this->user_pass));
        $client->submit($form);

        // redirection auto vers login_redirect
        $crawler = $client->followRedirect();
        
        // redirection auto vers org/x/show
        $crawler = $client->followRedirect();
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        /*
         * AFFICHAGE
         */
        
        // affichage de la liste des orgs
        $crawler = $client->request('GET', '/org/');
        
        // verification
        $this->assertEquals(403, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        // affichage de la liste des clients
        $crawler = $client->request('GET', '/client/');
        
        // verification
        $this->assertEquals(403, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        // affichage de la liste des produits
        $crawler = $client->request('GET', '/produit/');
        
        // verification
        $this->assertEquals(403, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        /*
         * AFFICHAGE D'UNE ENTITE
         * todo: affichage d'un client : a voir selon le cas
         */
        
        // affichage de la liste des clients
        $crawler = $client->request('GET', '/client/1/show');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
        
        // affichage de la liste des produits
        $crawler = $client->request('GET', '/produit/1/show');
        
        // verification
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code");
    }
    
    public function testDroitsAnonyme()
    {
        $client = static::createClient();
        
        /*
         * AFFICHAGE
         */
        
        // affichage de la liste des orgs
        $crawler = $client->request('GET', '/org/');
        
        // verification
        $this->assertTrue($client->getResponse()->isRedirect());
        
        // affichage de la liste des clients
        $crawler = $client->request('GET', '/client/');
        
        // verification
        $this->assertTrue($client->getResponse()->isRedirect());
        
        // affichage de la liste des produits
        $crawler = $client->request('GET', '/produit/');
        
        // verification
        $this->assertTrue($client->getResponse()->isRedirect());
        
        /*
         * AFFICHAGE D'UNE ENTITE
         */
        
        // affichage d'une org
        $crawler = $client->request('GET', '/org/' . $this->user_id . '/show');
        
        // verification
        $this->assertTrue($client->getResponse()->isRedirect());
        
        // affichage de la liste des clients
        $crawler = $client->request('GET', '/client/1/show');
        
        // verification
        $this->assertTrue($client->getResponse()->isRedirect());
        
        // affichage de la liste des produits
        $crawler = $client->request('GET', '/produit/1/show');
        
        // verification
        $this->assertTrue($client->getResponse()->isRedirect());
    }
}
