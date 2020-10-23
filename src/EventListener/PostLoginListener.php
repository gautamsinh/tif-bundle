<?php
/*
 * Copyright Gautamsinh Mori <morigautam13@gmail.com>, 2020
 * @author Gautamsinh Mori
 * @link https://github.com/gautamsinh/tif-bundle
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Conrat\TifBundle\EventListener;


use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\User;

/**
 * @Hook("postLogin")
 */
class PostLoginListener
{

    public function __invoke(User $user): void
    {
        die;
        if ($user instanceof \Contao\FrontendUser) {
            // Do something with the front end user $user  
        }
    }
}
