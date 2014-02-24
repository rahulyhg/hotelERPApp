<?php
namespace hotelERPApp;
class Model_Service_Mealsorder extends \Model_Table
{
	public $table='hotelERPApp_mealsorder';
	function init()
	{
		parent::init();
		$this->addField('date')->caption('Date');
		$this->addField('name')->caption('Customer Name');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('charges')->caption('Charges');
		$this->addField('total_amount')->caption('Total Amount');
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 