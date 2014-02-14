<?php
namespace hotelERPApp;
class Model_Master_Admin_Branch extends \Model_Table
{
	public $table='hotelERPApp_branch';
	function init()
	{
		parent::init();
		$this->addField('name');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
}