<?php
namespace FormMagento\FormModule\Model;
use FormMagento\FormModule\Api\GetCustomerInterface;

class GetCustomer implements GetCustomerInterface
{

     /**
     * {@inheritdoc}
     */

    public function getData()
    {  
         
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $connection = $resource->getConnection();
        $tableName = $resource->getTableName('formmagento_formmodule_form');

        $select = $connection->select()
        ->from(
       ['p' => $tableName]);

       $data = $connection->fetchAll($select);

       return $data;

    }

}