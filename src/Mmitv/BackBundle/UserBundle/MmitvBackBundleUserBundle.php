<?php

namespace Mmitv\BackBundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MmitvBackBundleUserBundle extends Bundle
{ 
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
