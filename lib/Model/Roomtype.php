<?php
namespace hotelERPApp;
class Model_Roomtype extends \Model_Table
{
	public $table='hotelERPApp_roomtype';
	function init(){
		parent::init();
		
		$this->addField('name')->caption('Room type')->mandatory('Cannot be Null');
		
		
		$this->hasMany('hotelERPApp/Room','roomtype_id');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}