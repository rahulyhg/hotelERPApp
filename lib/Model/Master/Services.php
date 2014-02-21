<?php
namespace hotelERPApp;
class Model_Master_Services extends \Model_Table
{
	public $table='hotelERPApp_services';
	function init()
	{
		parent::init();
		
		$this->addField('name');
		$this->hasMany('Staff','services_id');
		$this->hasMany('Customers','services_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
}