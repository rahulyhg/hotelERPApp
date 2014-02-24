<?php
namespace hotelERPApp;
class Model_Service_Laundry extends \Model_Table
{
	public $table='hotelERPApp_laundry';
	function init()
	{
		parent::init();
		$this->addField('date')->caption('Date');
		$this->addField('name')->caption('Customer Name');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('type_of_clothe')->caption('Type of Clothes');
		$this->addField('no_of_clothe')->caption('Number of Clothes');
		$this->addField('total_amount')->caption('Total Amount');


		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 