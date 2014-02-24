<?php
namespace hotelERPApp;
class Model_Service_Medical extends \Model_Table
{
	public $table='hotelERPApp_medical';
	function init()
	{
		parent::init();
		$this->addField('date')->caption('Date');
		$this->addField('name')->caption('Customer Name');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('doctor')->caption('Doctor Name');
		$this->addField('dignosis')->caption('Dignosis');
		$this->addField('charges')->caption('Charges');
		$this->addField('total_amount')->caption('Total Amount');
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 