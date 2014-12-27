<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Aparat
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
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
	'ce_aparat' => 'system/modules/aparat/templates/elements',
));
