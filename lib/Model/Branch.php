<?php
namespace hotelERPApp;
class Model_Branch extends \Model_Table
{
	public $table='hotelERPApp_branch';
	function init()
	{
		parent::init();
		
		$this->hasOne('hotelERPApp/Hotel','hotel_id');
		 
		
		$this->addField('name')->caption('Branch Name')->mandatory('Cannot be Null');
		$this->addField('branchhead_name');
		$this->addField('contact_no')->mandatory('Cannot be Null');
		$this->addField('email')->mandatory('Cannot be Null');
		$this->addField('address')->mandatory('Cannot be Null');
		$this->addField('password');

		$this->hasMany('hotelERPApp/Package','branch_id');
		$this->hasMany('hotelERPApp/Room','branch_id');
		$this->hasMany('hotelERPApp/Customer','branch_id');
		$this->hasMany('hotelERPApp/branchs','branch_id');
		$this->hasMany('hotelERPApp/Service','branch_id');

		$this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}
	function beforeSave()
    {
		   $branch=$this->add('hotelERPApp/Model_Branch');

	       if($this->loaded()) 
		   {
			  $branch->addCondition('id','<>',$this->id);
		   
		     }

			$branch->addCondition('name',$this['name']);
			$branch->tryLoadAny();
			
			if($branch->loaded())
			{
				//throw $this->exception('It`s already exist');
				$this->api->js()->univ()->closeDialog()->errorMessage('It`s already exist')->execute();
			}
		
	 }

	 function isActive(){

	 	$branch=$this->add('hotelERPAppApp/Model_Branch');

		$branch->addCondition('name',$name);
		$branch->tryLoadAny();

		if($branch->loaded()){

			return true;
		}
		else{

			return false;
		}

	 }

	 function tryLogin($email,$password){

	 	$branch=$this->add('hotelERPApp/Model_Branch');

		$branch->addCondition('email',$email); 
		$branch->addCondition('password',$password);
		$branch->tryLoadAny();

		if($branch->loaded()){
			$this->api->memorize('logged_in_user',$email);
			$this->api->memorize('type_of_user',$email);
			return true;
			}
			else{
				$this->api->forget('logged_in_user',$email);
				$this->api->forget('type_of_user',$email);
				return false;
				
			}

	 	
	 }

	
}