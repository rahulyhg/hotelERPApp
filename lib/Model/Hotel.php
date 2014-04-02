<?php
namespace hotelERPApp;
class Model_Hotel extends \Model_Table{
	public $table='hotelERPApp_hotel';
	function init(){
		parent::init();

		$this->hasOne('Epan','epan_id');

		$this->addField('name')->caption('Branch Name')->mandatory('cannot be null');
		$this->addField('branch_reg_no')->type('int')->caption('Branch Registeration Number')->mandatory('cant null');
		$this->addField('branch_head')->caption('Head Name')->mandatory('cant null');
		$this->addField('branch_location')->caption('Location')->mandatory('cant null');
		$this->addField('branch_uname')->caption('User Name')->mandatory('cant null');
		$this->addField('branch_password')->type('password')->caption('Password')->mandatory('cant null');
		$this->addField('DropDown','Level')->setValueList(array('Branch'=>'Branch','Recep'=>'Reception'))->caption('Authentication Level')->mandatory('cant null');

		$this->hasMany('hotelERPApp/Branch','hotel_id');
		$this->hasMany('hotelERPApp/Customer','hotel_id');
		$this->hasMany('hotelERPApp/Service','hotel_id');
		$this->hasMany('hotelERPApp/Package','hotel_id');
		$this->hasMany('hotelERPApp/Room','hotel_id');
		$this->hasMany('hotelERPApp/Employees','hotel_id');

		$this->addHook('beforeDelete',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}

	function beforeDelete(){
	if($this->ref('hotelERPApp/Branch')->count()->getOne()>0)
	throw $this->exception('Please delete branch details first');

	if($this->ref('hotelERPApp/Service')->count()->getOne()>0)
	throw $this->exception('Please delete service details first');

	if($this->ref('hotelERPApp/Package')->count()->getOne()>0)
	throw $this->exception('Please delete package details first');

	if($this->ref('hotelERPApp/Room')->count()->getOne()>0)
	throw $this->exception('Please delete room details first');
	
	
}
} 