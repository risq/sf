<?php

namespace elinoix\shopBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class elinoixshopBundle extends Bundle
{
        public function getParent() {
        return 'FOSUserBundle';
    }

}
