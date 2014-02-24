<?php
namespace hotelERPApp;
class Model_Master_Onlinebooking extends \Model_Table
{
	public $table='hotelERPApp_onlinebooking';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Registeration','hotelERPApp_onlinebooking_id');
	}
}