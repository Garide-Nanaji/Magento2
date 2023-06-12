<?php

namespace FormMagento\FormModule\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
	protected $_postFactory;

	public function __construct(\FormMagento\FormModule\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		if (version_compare($context->getVersion(), '2.0.0', '<')) {
			$data = [
                'firstname'         => "Raj",
                'lastname' => "reddy",
                'email'      => 'rajreddy@gmail.com',
                'dob'         => '09/03/2001'
                
            ];
			$post = $this->_postFactory->create();
			$post->addData($data)->save();
		}
	}
}