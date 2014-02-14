<?php
namespace hotelERPApp;
class Model_Master_Admin_Branch extends \Model_Table
{
	public $table='hotelERPApp_branch';
	function init()
	{
		parent::init();
		$this->hasOne('Administrator','administrator_id');
		$this->addField('branch_name');
		$this->hasMany('Services','branch_id');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}