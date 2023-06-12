<?php

namespace FormMagento\FormModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\FormMagento\FormModule\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'firstname'         => "Ram",
			'lastname' => "Krishana",
			'email'      => 'ramkrishna@gmail.com',
			'dob'         => '09/03/2000'
			
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}