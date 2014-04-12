<?php

namespace hotelERPApp;

class View_Server_UpdateBranchAdminProfile extends \View{
	function init(){
		parent::init();

		$form=$this->add('Form');
		$form->setModel($this->api->xhotelerpauth->model);

		$form->addSubmit('Update Profile');

		
	}
}