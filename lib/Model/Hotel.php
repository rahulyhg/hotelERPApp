<?php
namespace hotelERPApp;
class Model_Hotel extends \Model_Table{
	public $table='hotelERPApp_hotel';
	function init(){
		parent::init();

		$this->hasOne('Epan','epan_id');

		$this->addField('name')->caption('Hotel Name')->mandatory('cannot be null');
		$this->addField('reg_no')->type('int')->caption('Hotel Registeration Number')->mandatory('cant null');
		$this->addField('contact_person')->caption('Head Name')->mandatory('cant null');
		$this->addField('address')->caption('Location')->mandatory('cant null');
		$this->addField('email')->caption('User Name')->mandatory('cant null');
		$this->addField('password')->type('password')->caption('Password')->mandatory('cant null');

		$this->hasMany('hotelERPApp/Branch','hotel_id');

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