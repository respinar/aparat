<?php

/*
 * Aparat module for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2014-2017, Respinar
 * @author     Hamid Abbaszadeh <https://respinar.com>
 * @license    GNU/LGPL-3+
 */


/**
 * Add palettes to tl_module
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['aparat'] = '{type_legend},type,headline;{source_legend},aparat;{player_legend},aparat_template,aparat_responsive,playerSize;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

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
$GLOBALS['TL_DCA']['tl_content']['fields']['aparat_responsive'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['aparat_responsive'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['aparat_template'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['aparat_template'],
	'default'                 => 'aparat_script',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('tl_content_aparat', 'getAparatTemplates'),
	'reference'               => &$GLOBALS['TL_LANG']['CTE'],
	'eval'                    => array(),
    'sql'                     => "varchar(64) NOT NULL default ''"
);


/**
 * Class tl_content_aparat
 */
class tl_content_aparat extends Backend
{

	/**
	 * Return all aparat templates as array
	 *
	 * @return array
	 */
	public function getAparatTemplates()
	{
		return $this->getTemplateGroup('aparat_');
	}

}
