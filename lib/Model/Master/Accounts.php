<?php
namespace hotelERPApp;
class Model_Master_Accounts extends \Model_Table
{
	public $table='hotelERPApp_accounts';
	function init()
	{
		parent::init();
		$this->hasOne('Staff','staff_id');
		$this->addField('account');
		$this->hasMany('Branch','accounts_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}