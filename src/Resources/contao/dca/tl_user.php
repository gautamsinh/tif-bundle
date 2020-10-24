<?php
/*
 * Copyright Gautamsinh Mori <morigautam13@gmail.com>, 2020
 * @author Gautamsinh Mori
 * @link https://github.com/gautamsinh/tif-bundle
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// contao/dca/tl_user.php
// Modify the palette
// $GLOBALS['TL_DCA']['tl_user']['palettes']['default'] = str_replace(
//     'company',
//     'loginToken,company',
//     $GLOBALS['TL_DCA']['tl_user']['palettes']['default']
// );

// Add the field meta data
// contao/dca/tl_user.php

$GLOBALS['TL_DCA']['tl_user']['fields']['tifToken'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_user']['tifToken'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'options' => array('feModules', 'beModules', 'pages', 'articles', 'contents', 'infos'),
    'reference' => &$GLOBALS['TL_LANG']['tl_user']['tifTokenValues'],
    'eval' => array('multiple' => true),
    'sql' => "blob NULL",
);
