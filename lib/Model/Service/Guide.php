<?php
namespace hotelERPApp;
class Model_Service_Guide extends \Model_Table
{
	public $table='hotelERPApp_guide';
	function init(){
		parent::init();
		

	    $this->hasMany('hotelERPApp/Master_Customer','hotelERPApp_guide_id');
	}
}