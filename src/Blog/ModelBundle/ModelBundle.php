<?php

namespace Blog\ModelBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ModelBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
