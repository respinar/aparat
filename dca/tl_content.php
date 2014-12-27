<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   aparat
 * @author    Hamid Abbaszadeh
 * @license   GNU/GPL2
 * @copyright respinar 2014
 */
/**
 * Add palettes to tl_module
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['aparat'] = '{type_legend},type,headline;{source_legend},aparat;{player_legend},playerSize;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Add fields to tl_module
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['aparat'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['aparat'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'mandatory'=>true),
	'sql'                     => "varchar(16) NOT NULL default ''"
);
