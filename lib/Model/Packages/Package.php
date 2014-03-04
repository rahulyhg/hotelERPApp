<?php
namespace hotelERPApp;
class Model_Packages_Package extends \Model_Table
{
	public $table='hotelERPApp_package';
	function init(){
		parent::init();

		$this->addField('name')->caption('Package Name');
		$this->addField('desc')->caption('Package Description');
		$this->addField('pack_service')->caption('Service in Package');
		$this->addField('pack_room_cate')->caption('Room Category in Package');
		$this->addField('pack_room_type')->caption('Room Type in Package');
		$this->addField('pack_rate')->caption('Package Rate');
		$this->addField('pack_Duration')->caption('Package Duration');
		
		$this->hasMany('hotelERPApp/Customer_Guestbook','package_id');
	}
}