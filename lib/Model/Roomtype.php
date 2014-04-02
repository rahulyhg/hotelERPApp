<?php
namespace hotelERPApp;
class Model_Roomtype extends \Model_Table
{
	public $table='hotelERPApp_roomtype';
	function init(){
		parent::init();
		
		$this->addField('name')->caption('Room type')->mandatory('Cannot be Null');
		
		
		$this->hasMany('hotelERPApp/Room','roomtype_id');

		$this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}
	function beforeSave()
    {
		   $roomtype=$this->add('hotelERPApp/Model_Roomtype');

	       if($this->loaded()) 
		   {
			  $roomtype->addCondition('id','<>',$this->id);
		   
		     }

			$roomtype->addCondition('name',$this['name']);
			$roomtype->tryLoadAny();
			
			if($roomtype->loaded())
			{
				//throw $this->exception('It`s already exist');
				$this->api->js()->univ()->closeDialog()->errorMessage('It`s already exist')->execute();
			}
		
	 }
}