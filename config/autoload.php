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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'aparat',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'aparat\ContentAparat' => 'system/modules/aparat/elements/ContentAparat.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_aparat'     => 'system/modules/aparat/templates/elements',
	'aparat_script' => 'system/modules/aparat/templates/aparat',
	'aparat_iframe' => 'system/modules/aparat/templates/aparat',
));
