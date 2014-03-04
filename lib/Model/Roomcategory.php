<?php
namespace hotelERPApp;
class Model_Roomcategory extends \Model_Table
{
	public $table='hotelERPApp_roomcategory';
	function init(){
		parent::init();
		
		$this->addField('name')->caption('Room Category');
		
		$this->hasMany('hotelERPApp/Package','roomcategory_id');
		$this->hasMany('hotelERPApp/Room','roomcategory_id');

		$this->add('dynamic_model/Controller_AutoCreator');
	}
}