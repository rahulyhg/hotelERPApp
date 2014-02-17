<?php
namespace hotelERPApp;
class Model_Master_Packages extends \Model_Table
{
	public $table='hotelERPApp_packages';
	function init()
	{
		parent::init();
		$this->addField('package_name');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}