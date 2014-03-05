<?php
namespace hotelERPApp;
class Model_Hotel extends \Model_Table{
	public $table='hotelERPApp_hotel';
	function init(){
		parent::init();

		$this->hasOne('Epan','epan_id');
		$this->addField('name')->caption('Branch Name');
		$this->addField('branch_reg_no')->caption('Branch Registeration Number');
		$this->addField('branch_head')->caption('Head Name');
		$this->addField('branch_location')->caption('Location');
		$this->addField('branch_uname')->caption('User Name');
		$this->addField('branch_password')->caption('Password');
		$this->addField('Level')->caption('Authentication Level');
		

		$this->hasMany('hotelERPApp/Branch','hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 