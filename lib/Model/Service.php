<?php
namespace hotelERPApp;
class Model_Service extends \Model_Table
{
	public $table='hotelERPApp_service';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		$this->hasOne('hotelERPApp/Branch','branch_id');
		$this->addField('name')->caption('Service Name');
		$this->addField('service_desc')->caption('Service Description');
		$this->addField('service_price')->caption('Service Price')->type('int');
		$this->addField('is_active')->type('boolean');

		$this->hasMany('hotelERpApp/Customer','service_id');
		$this->hasMany('hotelERpApp/Packageservice','service_id');
		
		$this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}
	function beforeSave()
    {
		   $service=$this->add('hotelERPApp/Model_Service');

	       if($this->loaded()) 
		   {
			  $service->addCondition('id','<>',$this->id);
		   
		     }

			$service->addCondition('name',$this['name']);
			$service->tryLoadAny();
			
			if($service->loaded())
			{
				//throw $this->exception('It`s already exist');
				$this->api->js()->univ()->closeDialog()->errorMessage('It`s already exist')->execute();
			}
		
	 }
}

