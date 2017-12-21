<?php

namespace Product\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Config\Reader;
use Zend\XmlRpc;
use Zend\Http\Client;

class ListController extends AbstractActionController
{
    protected $productTable;
    
    public function indexAction()
    {
        $reader = new Reader\Xml();
        $data = $reader->fromFile('instock.xml');
//        echo '<br />*****<pre>';
//        print_r($data);
//        echo '</pre>*****<br />';
        return new ViewModel(
            array(
                'albums' => $this->getProductTable()->fetchAll(),
            )
        );
    }

    public function getProductTable()
    {
        if (!$this->productTable) {
            $sm = $this->getServiceLocator();
            $this->productTable = $sm->get('Product\Model\ProductTable');
        }
        return $this->productTable;
    }
}