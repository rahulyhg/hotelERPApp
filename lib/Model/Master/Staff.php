<?php
namespace hotelERPApp;
class Model_Master_Staff extends \Model_Table{
	public $table='hotelERPApp_staff';
	function init(){
		parent::init();
		$this->addField('name');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}