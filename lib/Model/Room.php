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
		$this->addField('name')->caption('Room No');
		$this->addField('is_active')->type('boolean');
		
	    $this->add('dynamic_model/Controller_AutoCreator');
	}
}