<?php
namespace hotelERPApp;
class Model_Master_Package extends \Model_Table
{
	public $table='hotelERPApp_onlinebooking';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Customer','hotelERPApp_package_id');
	}
}