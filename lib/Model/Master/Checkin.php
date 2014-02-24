<?php
namespace hotelERPApp;
class Model_Master_Checkin extends \Model_Table
{
	public $table='hotelERPApp_checkin';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Customer','hotelERPApp_checkin_id');
	}
}