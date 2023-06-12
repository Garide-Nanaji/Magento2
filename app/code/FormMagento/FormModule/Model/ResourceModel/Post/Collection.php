<?php
namespace FormMagento\FormModule\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'form_id';
	protected $_eventPrefix = 'formmagento_formmodule_form_collection';
	protected $_eventObject = 'form_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('FormMagento\FormModule\Model\Post', 'FormMagento\FormModule\Model\ResourceModel\Post');
	}

}

