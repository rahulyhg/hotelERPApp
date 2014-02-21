<?php
namespace hotelERPApp;
class Model_Master_Branch extends \Model_Table
{
	public $table='hotelERPApp_branch';
	function init()
	{
		parent::init();
		$this->addField('branch_location')->caption('Location');
		$this->addField('branch_address')->caption('Address');
		$this->addField('branch_contact_no')->caption('Contact Number');
		$this->addField('branch_email')->caption('E-mail');

		$this->hasMany('hotelERPApp/Master_Branch','hotelERPApp_hotel_id');
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 