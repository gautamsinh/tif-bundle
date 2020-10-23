<?php
/*
 * Copyright Gautamsinh Mori <morigautam13@gmail.com>, 2020
 * @author Gautamsinh Mori
 * @link https://github.com/gautamsinh/tif-bundle
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// contao/dca/tl_module.php
// Modify the palette
// $GLOBALS['TL_DCA']['tl_user']['palettes']['default'] = str_replace(
//     'company',
//     'loginToken,company',
//     $GLOBALS['TL_DCA']['tl_user']['palettes']['default']
// );

// Add the field meta data
$GLOBALS['TL_DCA']['tl_user']['fields']['loginToken'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_user']['loginToken'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => array('mandatory' => false),
    'sql'       => "varchar(8) NOT NULL default ''"
);