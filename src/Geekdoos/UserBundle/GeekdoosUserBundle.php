<?php

namespace Geekdoos\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GeekdoosUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
