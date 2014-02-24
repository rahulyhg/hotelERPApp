<?php
namespace hotelERPApp;
class Model_Master_Checkout extends \Model_Table
{
	public $table='hotelERPApp_checkout';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Customer','hotelERPApp_checkout_id');
	}
}