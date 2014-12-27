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
 * CONTENT ELEMENTS
 *
 * Content elements are stored in a global array called "TL_CTE". You can add
 * your own content elements by adding them to the array.
 *
 * $GLOBALS['TL_CTE'] = array
 * (
 *    'group_1' => array
 *    (
 *       'cte_1' => 'ContentClass1',
 *       'cte_2' => 'ContentClass2'
 *    )
 * );
 *
 * The keys (like "cte_1") are the element names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "ContentClass1") are the names of the classes, which will be loaded when the
 * element is rendered. The class "ContentClass1" has to be stored in a file
 * named "ContentClass1.php" in your module folder.
 */


array_insert($GLOBALS['TL_CTE'], 2, array
(
	'media' => array
	(
		'aparat'    => 'ContentAparat',
	)
));

