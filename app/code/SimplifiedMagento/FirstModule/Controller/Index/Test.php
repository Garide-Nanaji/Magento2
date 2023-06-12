<?php
namespace SimplifiedMagento\FirstModule\Controller\Index;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
//use SimplifiedMagento\FirstModule\Model\PencilFactory;

//use Magento\Catalog\Api\ProductRepositoryInterface;
class Test extends \Magento\Framework\App\Action\Action
{
	protected $PencilInterface;
	//protected $ProductRepositoryInterface;
	//protected $pencilfactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
	   // ProductRepositoryInterface $ProductRepositoryInterface,
		PencilInterface $PencilInterface)
	{
		$this->PencilInterface = $PencilInterface;
		//$this->pencilfactory = $pencilfactory;
		//$this->ProductRepositoryInterface = $ProductRepositoryInterface;
		return parent::__construct($context);
	}

	public function execute()
	{
		//echo $this->PencilInterface->getPencilType();
		//echo get_class($this->ProductRepositoryInterface);
		 $objectmanager=\Magento\Framework\App\ObjectManager::getInstance();
		$pencil=$objectmanager->create(type:'SimplifiedMagento\FirstModule\Model\Pencil');
		var_dump($pencil);
		// $book=$objectmanager->create(type:'SimplifiedMagento\FirstModule\Model\Book');
		// var_dump($book);
		// $student=$objectmanager->create(type:'SimplifiedMagento\FirstModule\Model\Student');
		//  var_dump($student);
		// $pencil=$objectmanager->create(array("name"=>"Nani"));
		//  var_dump($pencil);

	}
}