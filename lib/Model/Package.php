<?php
namespace hotelERPApp;
class Model_Package extends \Model_Table
{
	public $table='hotelERPApp_package';
	function init(){
		parent::init();
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		$this->hasOne('hotelERPApp/Roomcategory','roomcategory_id');
		$this->hasOne('hotelERPApp/Roomtype','roomtype_id');
		$this->addField('name')->caption('Package Name');
		$this->addField('desc')->caption('Package Description');
		$this->addField('pack_rate')->caption('Package Rate');
		$this->addField('pack_duration')->caption('Package Duration');
		$this->addField('is_active')->type('boolean');
		
		$this->hasMany('hotelERPApp/Customer','package_id');
		$this->hasMany('hotelERPApp/Packageservice','package_id');
		$this->add('dynamic_model/Controller_AutoCreator');
	}
}