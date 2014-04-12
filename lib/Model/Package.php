<?php
namespace hotelERPApp;
class Model_Package extends \Model_Table
{
	public $table='hotelERPApp_package';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		$this->hasOne('hotelERPApp/Branch','branch_id');
		$this->hasOne('hotelERPApp/Roomcategory','roomcategory_id');
		$this->hasOne('hotelERPApp/Roomtype','roomtype_id');
		$this->addField('name')->caption('Package Name')->mandatory('Cannot be Null');
		$this->addField('desc')->caption('Package Description')->mandatory('Cannot be Null');
		$this->addField('pack_rate')->caption('Package Rate')->type('int')->mandatory('Cannot be Null');
		$this->addField('pack_duration')->caption('Package Duration')->mandatory('Cannot be Null');
		$this->addField('is_active')->type('boolean');
		
		$this->hasMany('hotelERPApp/Customer','package_id');
		$this->hasMany('hotelERPApp/Packageservice','package_id');

		$this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}
	function beforeSave()
    {
		   $package=$this->add('hotelERPApp/Model_Package');

	       if($this->loaded()) 
		   {
			  $package->addCondition('id','<>',$this->id);
		   
		     }

			$package->addCondition('name',$this['name']);
			$package->tryLoadAny();
			
			if($package->loaded())
			{
				//throw $this->exception('It`s already exist');
				$this->api->js()->univ()->closeDialog()->errorMessage('It`s already exist')->execute();
			}
		
	 }
}