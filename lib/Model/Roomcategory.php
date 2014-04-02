<?php
namespace hotelERPApp;
class Model_Roomcategory extends \Model_Table
{
	public $table='hotelERPApp_roomcategory';
	function init(){
		parent::init();
		
		$this->addField('name')->caption('Room Category')->mandatory('Cannot be Null');
		
		$this->hasMany('hotelERPApp/Package','roomcategory_id');
		$this->hasMany('hotelERPApp/Room','roomcategory_id');

		$this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}
	function beforeSave()
    {
		   $roomcategory=$this->add('hotelERPApp/Model_Roomcategory');

	       if($this->loaded()) 
		   {
			  $roomcategory->addCondition('id','<>',$this->id);
		   
		     }

			$roomcategory->addCondition('name',$this['name']);
			$roomcategory->tryLoadAny();
			
			if($roomcategory->loaded())
			{
				//throw $this->exception('It`s already exist');
				$this->api->js()->univ()->closeDialog()->errorMessage('It`s already exist')->execute();
			}
		
	 }
}