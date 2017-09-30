<?php

/*
 * Aparat module for Contao Open Source CMS.
 *
 * @copyright  Copyright (c) 2014-2017, Respinar
 * @author     Hamid Abbaszadeh <https://respinar.com>
 * @license    GNU/LGPL-3+
 */


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_aparat'     => 'system/modules/aparat/templates/elements',
	'aparat_script' => 'system/modules/aparat/templates/aparat',
	'aparat_iframe' => 'system/modules/aparat/templates/aparat',
));
