<?php

/**
 * aparat Extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2014-2017, Respinar
 * @author     Respinar <info@respinar.com>
 * @license    https://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       https://respinar.com/
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
