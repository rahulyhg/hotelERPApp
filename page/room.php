<?php
class page_hotelERPApp_page_room extends Page
{
	function init()

{
	parent::init();


	$this->api->stickyGET('room_id');
		
		$form=$this->add('Form');
		$room_model=$this->add('hotelERPApp/Model_Room');
		if($_GET['room_id'])
		$room_model->load($_GET['room_id']);
		$form->setModel($room_model);

		$form->addSubmit('Add');
			if($form->isSubmitted()){

		$form->update();
		$action=array($form->js()->reload(),
		$form->js()->univ()->closeDialog()->successMessage('Done'));
		$form->js(null,$action)->_selector('.Room')->trigger('roomevent')->execute();
}
}
	}