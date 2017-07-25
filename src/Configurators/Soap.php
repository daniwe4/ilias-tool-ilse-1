<?php

namespace CaT\ilse\Configurators;

/**
 * Configurate ILIAS soap part
 * 
 * Create roles
 */
class Soap {
	/**
	 * @var \ilSetting
	 */
	protected $gSetting;

	public function __construct($absolute_path, \ilSetting $setting) {
		$this->gSetting = $setting;
	}

	/**
	 * Configure SOAP
	 *
	 * @param \CaT\ilse\Config\Soap $soap
	 */
	public function soap(\CaT\ilse\Config\Soap $soap) {
		$this->gSetting->set('soap_user_administration', $soap->enable());
		$this->gSetting->set('soap_wsdl_path', trim($soap->wdslPath()));
		$this->gSetting->set('soap_connect_timeout',$soap->timeout());
	}
}