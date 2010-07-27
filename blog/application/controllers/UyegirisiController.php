<?php

class UyegirisiController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $form = new Application_Form_Uyegirisi();
        $this->view->form = $form;

        if ($this->_request->isPost()) {
            if ($form->isValid($this->_request->getPost())) {
                echo 'Onaylı';
            } else {
                echo 'Onaysız';
            }
        }
    }


}

