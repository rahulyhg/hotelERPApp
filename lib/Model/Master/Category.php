<?php
namespace hotelERPApp;
class Model_Master_Category extends \Model_Table
{
	public $table='hotelERPApp_category';
	function init(){
		parent::init();
		$this->addField('name')->caption('Name');

	    $this->hasMany('hotelERPApp/Master_Categorytype','hotelERPApp_category_id');
	}
}