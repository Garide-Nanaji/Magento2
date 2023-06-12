<?php
namespace SimplifiedMagento\FirstModule\Controller\Index\Test;

/**
 * Interceptor class for @see \SimplifiedMagento\FirstModule\Controller\Index\Test
 */
class Interceptor extends \SimplifiedMagento\FirstModule\Controller\Index\Test implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \SimplifiedMagento\FirstModule\Api\PencilInterface $PencilInterface)
    {
        $this->___init();
        parent::__construct($context, $PencilInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
