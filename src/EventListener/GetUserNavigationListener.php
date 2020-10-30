<?php
// src/EventListener/GetUserNavigationListener.php
namespace Conrat\TifBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\User;
use Contao\Database;
use Symfony\Component\Security\Core\Security;

/**
 * @Hook("getUserNavigation")
 */
class GetUserNavigationListener
{
    public function __invoke(array $modules, bool $showAll): array
    {
        $user = \Contao\BackendUser::getInstance();

        if ($user instanceof \Contao\BackendUser) {
            if ($user->tifToken != "") {
                $url = 'http://intranet/myweb/conrat/login/direct?tifToken=' . $user->tifToken;
                $modules['system']['modules']['contao'] = [
                    'label' => 'Tif',
                    'title' => 'Tif',
                    'class' => 'navigation contao',
                    'href' => $url,
                ];
            }
        }
        return $modules;
    }
}
