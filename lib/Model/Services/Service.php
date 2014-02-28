<?php
namespace hotelERPApp;
class Model_Services_Service extends \Model_Table
{
	public $table='hotelERPApp_service';
	function init(){
		parent::init();
		$this->addField('name')->caption('Service Name');
		$this->addField('service_desc')->caption('Service Description');
		$this->addField('service_price')->caption('Service Price');
		
	    
	}
}