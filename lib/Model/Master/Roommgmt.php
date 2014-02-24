<?php
namespace hotelERPApp;
class Model_Master_Roommgmt extends \Model_Table
{
	public $table='hotelERPApp_roommgmt';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Categorytype','hotelERPApp_category_id');
	}
}