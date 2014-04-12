<?php

namespace hotelERPApp;

class View_Server_BranchAdminLogin extends \View{
	function init(){
		parent::init();
		
		$this->add('H1')->set('Branch Admin Login Panel')->setAttr('align','center');
		$form=$this->add('Form');
		$form->addField('line','email')->validateNotNull('Required Field');
		$form->addField('password','password')->validateNotNull('Required Field');

		// $form->addSubmit('login');
		$form->add('Button')->set('Login')
		->addStyle(array('margin-top'=>'25px','margin-left'=>'37px'))
			->js('click')->submit();
		
		

		if($form->isSubmitted()){
		
			$employer=$this->add('hotelERPApp/Model_Branch');
				
		 	if(!$employer->tryLogin($form['email'],$form['password']))
		 		$form->displayError('email','Wrong input');
		 	
				// Redirect to Dashboard
				$this->js()->univ()->redirect($this->api->url(null,array('subpage'=>'xhotelerp-branchadmindashboard')))->execute();
			}
	}
}