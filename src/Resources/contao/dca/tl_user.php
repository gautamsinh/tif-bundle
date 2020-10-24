<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

// Extend the default palettes
Contao\CoreBundle\DataContainer\PaletteManipulator::create()
	->addLegend('faq_legend', 'amg_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)
	->addField(array('tifToken', 'faqp'), 'faq_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
	->applyToPalette('extend', 'tl_user')
	->applyToPalette('custom', 'tl_user')
;

// Add fields to tl_user
$GLOBALS['TL_DCA']['tl_user']['fields']['tifToken'] = array
(
	'sql'                     => "VARCHAR(255) NOT NULL DEFAULT"
);

$GLOBALS['TL_DCA']['tl_user']['fields']['faqp'] = array
(
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options'                 => array('create', 'delete'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('multiple'=>true),
	'sql'                     => " VARCHAR(255) NOT NULL DEFAULT ''"
);
