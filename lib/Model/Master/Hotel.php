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
		

		$this->hasMany('hotelERPApp/Master_Branch','hotelERPApp_hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 