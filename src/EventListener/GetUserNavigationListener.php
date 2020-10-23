<?php
// src/EventListener/GetUserNavigationListener.php
namespace Conrat\TifBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

/**
 * @Hook("getUserNavigation")
 */
class GetUserNavigationListener
{
    public function __invoke(array $modules, bool $showAll): array
    {
        // Add custom navigation item to the Contao website
        $modules['system']['modules']['contao'] = [
            'label' => 'Contao homepage',
            'title' => 'Visit the Contao CMS website',
            'class' => 'navigation contao',
            'href' => 'https://contao.org/en/',
        ];

        return $modules;
    }
}
