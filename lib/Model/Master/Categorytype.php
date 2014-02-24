<?php
namespace hotelERPApp;
class Model_Master_Categorytype extends \Model_Table
{
	public $table='hotelERPApp_category';
	function init(){
		parent::init();
		
		$this->hasOne('hotelERPApp/Master_Category','hotelERPApp_category_id');

		$this->addField('name')->caption('Name');

	    
	}
}