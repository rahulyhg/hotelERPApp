<?php
namespace hotelERPApp;
class Model_Service_Guide extends \Model_Table
{
	public $table='hotelERPApp_guide';

	function init()
	{
		parent::init();
		$this->addField('date')->caption('Date');
		$this->addField('name')->caption('Customer Name');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('guide')->caption('Guide Name');
	    $this->hasMany('hotelERPApp/Master_Customer','hotelERPApp_guide_id');
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 

	

