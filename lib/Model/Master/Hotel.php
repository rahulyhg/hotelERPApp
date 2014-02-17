<?php
namespace hotelERPApp;
class Model_Master_Hotel extends \Model_Table
{
	public $table='hotelERPApp_hotel';
	function init()
	{
		parent::init();
		$this->addField('name')->caption('Hotel Name');
		$this->hasMany('hotelERPApp/Master_Branch','hotelERPApp_hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}