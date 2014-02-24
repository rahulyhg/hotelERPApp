<?php
namespace hotelERPApp;
class Model_Master_Branch extends \Model_Table
{
	public $table='hotelERPApp_branch';
	function init()
	{
		parent::init();
		$this->hasOne('hotelERPApp/Master_Hotel','hotelERPApp_hotel_id')->caption('Branch name');
		$this->addField('branch_Head_Name');
		$this->hasMany('Services','branch_id');
		$this->hasMany('Accounts','branch_id');
		$this->hasMany('Packages','branch_id');
		$this->hasMany('Rooms','branch_id');
		$this->hasMany('Accounts','branch_id');
		$this->hasMany('Customers','branch_id');
		$this->hasMany('Rent','branch_id');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}