<?php

namespace FormMagento\FormModule\Controller\Index;

use FormMagento\FormModule\Model\PostFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;


class Booking extends \Magento\Framework\App\Action\Action {

    protected $_post;
    protected $resultRedirect;
    public function __construct(\Magento\Framework\App\Action\Context $context,
        \FormMagento\FormModule\Model\PostFactory  $post,
        \Magento\Framework\Controller\ResultFactory $result) {
        parent::__construct($context);
        $this->_post = $post;
        $this->resultRedirect = $result;
    }

	public function execute(){
        try {
            $model = $this->_post->create();
            $data = (array)$this->getRequest()->getPost();
            if($data){
                $model->addData([
                    "firstname" => $data['firstname'],
                    "lastname" => $data['lastname'],
                    "email" => $data['email'],
                    "dob" => $data['dob'],
                    ]);
                $saveData = $model->save();
                if($saveData){
                    $this->messageManager->addSuccess( __('Data added Successfully !') );
                }
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }

        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());

		//return $resultRedirect;
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
	}
}