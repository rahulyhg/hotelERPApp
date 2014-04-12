<?php
class page_hotelERPApp_page_owner_hotel extends page_componentBase_page_owner_main{
	function init(){
		parent::init();

		$this->h1->add('H1')->setElement('a')
             ->setAttr('href','?page=hotelERPApp_page_owner_main')
             ->set($this->component_namespace);

             $form=$this->add('Form');
             $hotel=$this->add('hotelERPApp/Model_Hotel');
             $hotel->tryLoadAny();
             $form->setModel($hotel);

             $form->addSubmit('Update');

             if($form->isSubmitted()){
             	$form->update();

             	$form->js()->univ()->successMessage('Update SuccessFully')->execute();
             }

	}
}