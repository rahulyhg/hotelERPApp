<?php
namespace hotelERPApp;
class Model_Master_Registeration extends \Model_Table
{
	public $table='hotelERPApp_registeration';
	function init(){
		parent::init();
		$this->addField('branch_location')->caption('Location');

	    $this->hasMany('hotelERPApp/Staffmgmt_Department','hotelERPApp_registeration_id');
	    $this->hasMany('hotelERPApp/Master_Branch','hotelERPApp_registeration_id');
	}
}