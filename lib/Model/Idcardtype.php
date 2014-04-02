<?php
namespace hotelERPApp;
class Model_Idcardtype extends \Model_Table
{
	public $table='hotelERPApp_idcardtype';
	function init()
	{
		parent::init();
		$this->addField('name')->caption('Id Card Type');

		$this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');

	}
	function beforeSave()
    {
		   $idcardtype=$this->add('hotelERPApp/Model_Idcardtype');

	       if($this->loaded()) 
		   {
			  $idcardtype->addCondition('id','<>',$this->id);
		   
		     }

			$idcardtype->addCondition('name',$this['name']);
			$idcardtype->tryLoadAny();
			
			if($idcardtype->loaded())
			{
				
			//throw $this->exception('It`s already exist');
				$this->api->js()->univ()->closeDialog()->errorMessage('It`s already exist')->execute();
			}
			

	
	 }
} 