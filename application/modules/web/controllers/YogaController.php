<?php
use web\Services\Content;

class Web_YogaController extends Zend_Controller_Action
{

    private $_flashMessenger = null;

    public function init()
    {
        $this->_flashMessenger = $this->_helper->getHelper('FlashMessenger');
        $this->_flashMessenger->clearCurrentMessages();
        $this->initView();
    }

    public function indexAction()
    {
        // action body
    }

    public function verAction()
    {
        try {
            if( $this->_getParam('id',0) != 0 ) {
                $formData = $this->getRequest()->getParams();
                $authSesion = new Zend_Session_Namespace(SES_USER);
                $daoContent = new Content();
                list($oContent, $oContentLang) = $daoContent->getById($formData['id'], $authSesion->oLanguage, false, true);

                $this -> view -> oContent = $oContent;
                $this -> view -> oContentLang = $oContentLang;
            } else {
                $this->_flashMessenger->addMessage('No se envió el ID del registro.');
            }
            
        } catch(Exception $e) {
            if ($e->getCode() == 1)
                $this->_flashMessenger->addMessage($e->getMessage());
            else
                $this->_flashMessenger->addMessage('Ocurrió un error en el procesamiento de su requerimiento.');
        }        
        $this -> view -> messages = $this->_flashMessenger->getCurrentMessages();
    }


}



