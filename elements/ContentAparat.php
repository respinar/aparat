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
 * Namespace
 */
namespace aparat;


/**
 * Class ContentAparat
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
			return '<p><a href="https://www.aparat.com/v/' . $this->aparat . '" target="_blank">https://www.aparat.com/v/' . $this->aparat . '</a></p>';
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

		$objTemplate = new \FrontendTemplate($this->aparat_template);

		if($this->aparat_responsive)
		{
			$objTemplate->responsive = true;
		}
		else
		{
			if ($this->playerSize != '')
			{
				$size = deserialize($this->playerSize);

				if (is_array($size)&&$size[0])
					$objTemplate->width = $size[0];

				if (is_array($size)&&$size[1])
					$objTemplate->height = $size[1];

			}
		}

		$objTemplate->randdiv = ContentAparat::getRandomString();

		$objTemplate->aparat_ID = $this->aparat;

		$this->Template->video_code =  $objTemplate->parse();
	}

	/**
	 * Generate random string for div class
	 */
	public function getRandomString($length = 8)
	{

		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$string = '';

		for ($i = 0; $i < $length; $i++)
			$string .= $characters[mt_rand(0, strlen($characters) - 1)];

		return $string;

	}

}
