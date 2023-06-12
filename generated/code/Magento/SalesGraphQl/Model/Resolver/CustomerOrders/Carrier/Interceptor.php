<?php
namespace Magento\SalesGraphQl\Model\Resolver\CustomerOrders\Carrier;

/**
 * Interceptor class for @see \Magento\SalesGraphQl\Model\Resolver\CustomerOrders\Carrier
 */
class Interceptor extends \Magento\SalesGraphQl\Model\Resolver\CustomerOrders\Carrier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Shipping\Model\Config\Source\Allmethods $carrierMethods)
    {
        $this->___init();
        parent::__construct($carrierMethods);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
