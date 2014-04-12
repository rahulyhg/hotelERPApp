<?php
class page_hotelERPApp_page_employee extends Page
{
	function init()

{
	parent::init();


			$this->api->stickyGET('employee_id');
			
			$form=$this->add('Form');
			$emp_model=$this->add('hotelERPApp/Model_Employees');
			if($_GET['employee_id'])
			$emp_model->load($_GET['employee_id']);
			$form->setModel($emp_model);

			$form->addSubmit('Add');
				if($form->isSubmitted()){

			$form->update();
			$action=array($form->js()->reload(),
			$form->js()->univ()->closeDialog()->successMessage('Done'));
			$form->js(null,$action)->_selector('.Employee')->trigger('empevent')->execute();
			}
	}
}