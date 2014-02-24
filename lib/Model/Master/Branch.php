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

<<<<<<< HEAD
		// $this->hasMany('hotelERPApp/Master_Branch','hotelERPApp_hotel_id');
=======
		$this->hasMany('hotelERPApp/Master_Package','hotelERPApp_branch_id');
		$this->hasMany('hotelERPApp/Master_Roommgmt','hotelERPApp_branch_id');
		$this->hasMany('hotelERPApp/Master_Customer','hotelERPApp_branch_id');
>>>>>>> 4a2def41aa602ae2ff7a5cb117ba9e22aef77ec3
		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 