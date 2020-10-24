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
use Contao\Database;

/**
 * @Hook("postLogout")
 */
class PostLogoutListener
{
    public function __invoke(User $user): void
    {
        $objDatabase = Database::getInstance();
        if ($user instanceof \Contao\BackendUser) {
            $objDatabase->prepare("UPDATE tl_user SET tifToken='' WHERE id=?")
                ->execute($user->id);
        }
    }
}
