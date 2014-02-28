<?php
namespace hotelERPApp;
class Model_Master_Hotel extends \Model_Table
{
	public $table='hotelERPApp_hotel';
	function init()
	{
		parent::init();
		$this->addField('branch_reg_no')->caption('Branch Registeration Number');
		$this->addField('branch_name')->caption('Branch Name');
		$this->addField('branch_head')->caption('Head Name');
		$this->addField('branch_location')->caption('Location');
		$this->addField('branch_uname')->caption('User Name');
		$this->addField('branch_password')->caption('Password');
		

		$this->hasMany('hotelERPApp/Master_Branch','hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 