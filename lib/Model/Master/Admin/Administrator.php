<?php
namespace hotelERPApp;
class Model_Master_Admin_Administrator extends \Model_Table
{
	public $table='hotelERPApp_administrator';
	function init()
	`{
		parent::init();
		$this->addField('administrator_name');
		$this->hasMany('Branch','administrator_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}