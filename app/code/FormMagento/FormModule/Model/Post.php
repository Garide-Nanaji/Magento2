<?php
namespace FormMagento\FormModule\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'formmagento_formmodule_form';

	protected $_cacheTag = 'formmagento_formmodule_form';

	protected $_eventPrefix = 'formmagento_formmodule_form';

	protected function _construct()
	{
		$this->_init('FormMagento\FormModule\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}