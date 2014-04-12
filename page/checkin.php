<?php
class page_hotelERPApp_page_checkin extends Page
{
	function init()

{
	parent::init();


	$this->api->stickyGET('customer_id');
		
		$form=$this->add('Form');
		$service_model=$this->api->xhotelerpauth->model->ref('hotelERPApp/Service');
		if($_GET['service_id'])
		$service_model->load($_GET['service_id']);
		$form->setModel($service_model);

		$form->addSubmit('Add');
			if($form->isSubmitted()){

		$form->update();
		$action=array($form->js()->reload(),
		$form->js()->univ()->closeDialog()->successMessage('Done'));
		$form->js(null,$action)->_selector('.Service')->trigger('serviceevent')->execute();
}
}
	}