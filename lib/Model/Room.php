<?php
namespace hotelERPApp;
class Model_Room extends \Model_Table
{
	public $table='hotelERPApp_room';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		$this->hasOne('hotelERPApp/Roomtype','roomtype_id');
		$this->hasOne('hotelERPApp/Roomcategory','roomcategory_id');
		$this->addField('name')->caption('Room No')->mandatory('Cannot be Null');
		$this->addField('is_active')->type('boolean');
		
	    $this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}
	function beforeSave()
    {
		   $room=$this->add('hotelERPApp/Model_Room');

	       if($this->loaded()) 
		   {
			  $room->addCondition('id','<>',$this->id);
		   
		     }

			$room->addCondition('name',$this['name']);
			$room->tryLoadAny();
			
			if($room->loaded())
			{
				//throw $this->exception('It`s already exist');
				$this->api->js()->univ()->closeDialog()->errorMessage('It`s already exist')->execute();
			}
		
	 }
}