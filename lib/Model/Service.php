<?php
namespace hotelERPApp;
class Model_Service extends \Model_Table
{
	public $table='hotelERPApp_service';
	function init(){
		parent::init();
		$this->addField('name')->caption('Service Name');
		$this->addField('service_desc')->caption('Service Description');
		$this->addField('service_price')->caption('Service Price');

		$this->hasMany('hotelERpApp/Customer','service_id');
		$this->hasMany('hotelERpApp/Packageservice','service_id');
		
		$this->add('dynamic_model/Controller_AutoCreator');
	    
	}
}

