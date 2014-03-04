<?php
namespace hotelERPApp;
class Model_Packageservice extends \Model_Table
{
	public $table='hotelERPApp_packageservice';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Package','package_id');
		$this->hasOne('hotelERPApp/Service','service_id');
		$this->addField('created_at')->type('date')->defaultValue(date('Y-m-d'));
		

		$this->add('dynamic_model/Controller_AutoCreator');
		
	    
	}
}