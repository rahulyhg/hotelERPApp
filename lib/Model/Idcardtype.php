<?php
namespace hotelERPApp;
class Model_Idcardtype extends \Model_Table
{
	public $table='hotelERPApp_idcardtype';
	function init()
	{
		parent::init();
		$this->addField('name')->caption('Id Card Type');

		$this->add('dynamic_model/Controller_AutoCreator');

	}
} 