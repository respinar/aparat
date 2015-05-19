<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   aparat
 * @author    Hamid Abbaszadeh
 * @license   GNU/GPL2
 * @copyright respinar 2014-2015
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
