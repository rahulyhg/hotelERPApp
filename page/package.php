<?php
class page_hotelERPApp_page_package extends Page
{
	function init()

{
	parent::init();


			$this->api->stickyGET('package_id');
			
			$form=$this->add('Form');
			$pack_model=$this->add('hotelERPApp/Model_Package');
			if($_GET['package_id'])
			$pack_model->load($_GET['package_id']);
			$form->setModel($pack_model);

			$form->addSubmit('Add');
				if($form->isSubmitted()){

			$form->update();
			$action=array($form->js()->reload(),
			$form->js()->univ()->closeDialog()->successMessage('Done'));
			$form->js(null,$action)->_selector('.Package')->trigger('packageevent')->execute();
			}
	}
}