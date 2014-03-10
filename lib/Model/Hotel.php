<?php
namespace hotelERPApp;
class Model_Hotel extends \Model_Table{
	public $table='hotelERPApp_hotel';
	function init(){
		parent::init();

		$this->hasOne('Epan','epan_id');

		$this->addField('name')->caption('Branch Name')->mandatory('cant null');
		$this->addField('branch_reg_no')->type('int')->caption('Branch Registeration Number')->mandatory('cant null');
		$this->addField('branch_head')->caption('Head Name')->mandatory('cant null');
		$this->addField('branch_location')->caption('Location')->mandatory('cant null');
		$this->addField('branch_uname')->caption('User Name')->mandatory('cant null');
		$this->addField('branch_password')->caption('Password')->mandatory('cant null');
		$this->addField('DropDown','Level')->setValueList(array('Branch'=>'Branch','Recep'=>'Reception'))->caption('Authentication Level')->mandatory('cant null');

		$this->hasMany('hotelERPApp/Branch','hotel_id');
		$this->hasMany('hotelERPApp/Customer','hotel_id');
		$this->hasMany('hotelERPApp/Service','hotel_id');
		$this->hasMany('hotelERPApp/Package','hotel_id');
		$this->hasMany('hotelERPApp/Room','hotel_id');
		$this->hasMany('hotelERPApp/Employees','hotel_id');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 