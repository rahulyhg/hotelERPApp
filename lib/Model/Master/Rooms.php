<?php
namespace hotelERPApp;
class Model_Master_Rooms extends \Model_Table
{
	public $table='hotelERPApp_rooms';
	function init()
	{
		parent::init();
		$this->addField('name');
		$this->hasMany('Branch','hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}