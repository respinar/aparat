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
 * Namespace
 */
namespace aparat;


/**
 * Class ContentAparat
 *
 * @copyright  respinar 2014
 * @author     Hamid Abbaszadeh
 * @package    Devtools
 */
class ContentAparat extends \ContentElement
{

	/**
	 * Extend the parent method
	 * @return string
	 */
	public function generate()
	{
		if ($this->aparat == '')
		{
			return '';
		}

		if (TL_MODE == 'BE')
		{
			return '<p><a href="http://www.aparat.com/v/' . $this->aparat . '" target="_blank">http://www.aparat.com/v/' . $this->aparat . '</a></p>';
		}

		return parent::generate();
	}

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_aparat';


	/**
	 * Generate the module
	 */
	protected function compile()
	{

		$this->Template->size = '';

		// Set the size
		if ($this->playerSize != '')
		{
			$size = deserialize($this->playerSize);

			if (is_array($size))
			{
				$this->Template->width = $size[0];
			}
		}

		$this->Template->randdiv = ContentAparat::getRandomString();

		$this->Template->href= "http://www.aparat.com/embed/".$this->aparat;

	}




	public function getRandomString($length = 8)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = '';

		for ($i = 0; $i < $length; $i++) {
			$string .= $characters[mt_rand(0, strlen($characters) - 1)];
		}
		return $string;
	}

}
