<?php
class page_hotelERPApp_page_customer extends Page
{
	function init()

{
	parent::init();


			$this->api->stickyGET('customer_id');
			
			$form=$this->add('Form');
			$cust_model=$service_model=$this->api->xhotelerpauth->model->ref('hotelERPApp/Customer');
			if($_GET['customer_id'])
			$emp_model->load($_GET['customer_id']);
			$form->setModel($cust_model);

			$form->addSubmit('Add');
				if($form->isSubmitted()){

			$form->update();
			$action=array($form->js()->reload(),
			$form->js()->univ()->closeDialog()->successMessage('Done'));
			$form->js(null,$action)->_selector('.Customer')->trigger('custevent')->execute();
			}
	}
}