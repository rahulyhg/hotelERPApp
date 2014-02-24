<?php
namespace hotelERPApp;
class Model_Service_Guide extends \Model_Table
{
	public $table='hotelERPApp_guide';
<<<<<<< HEAD
	function init()
	{
		parent::init();
		$this->addField('date')->caption('Date');
		$this->addField('name')->caption('Customer Name');
		$this->addField('room_no')->caption('Room Number');
		$this->addField('guide')->caption('Guide Name');
		
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 
=======
	function init(){
		parent::init();
		

	    $this->hasMany('hotelERPApp/Master_Customer','hotelERPApp_guide_id');
	}
}
>>>>>>> 4a2def41aa602ae2ff7a5cb117ba9e22aef77ec3
