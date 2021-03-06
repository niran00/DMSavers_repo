<?php
/**
 * IksStudio Core
 *
 *
 * @package   IksStudio Core
 * @author    IksStudio
 * @license   GPL-3.0
 * @link      https://iks-studio.com
 * @copyright 2019 IksStudio
 */

namespace IksStudio\IKSM_CORE\settings\styles;

use IksStudio\IKSM_CORE\utils\Utils;

class StylesSettingsButton {

	private $settings = [];

	public function __construct() {
		$this->settings = [
			StylesSettingsTypes::$background_color,
			StylesSettingsTypes::$color,
			array_merge( StylesSettingsTypes::$font_size, [
				"label" => Utils::t( "Text size" )
			] ),
			StylesSettingsTypes::$line_height,
			StylesSettingsTypes::$font_weight,
			StylesSettingsTypes::$text_align,
			StylesSettingsTypes::$text_transform,
			StylesSettingsTypes::$text_decoration,
			StylesSettingsTypes::$border_radius,
			StylesSettingsTypes::$margin,
			StylesSettingsTypes::$padding,
			StylesSettingsTypes::$height,
			StylesSettingsTypes::$width,
			StylesSettingsTypes::$max_width,
			StylesSettingsTypes::$custom,
		];
	}

	/**
	 * @return array
	 */
	public function get_settings() {
		return $this->settings;
	}

}