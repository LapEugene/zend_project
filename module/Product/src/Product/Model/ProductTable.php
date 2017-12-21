<?php

namespace Product\Model;

use Zend\Db\TableGateway\TableGateway;

class ProductTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function getProduct($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveProduct(Product $product)
    {
        $data = array(
            'product_name' => $product->product_name,
            'sku' => $product->sku,
            'stock' => $product->stock,
            'prouduct_url' => $product->prouduct_url,
            'price' => $product->price,
            'image' => $product->image,
            'image2' => $product->image2,
            'image3' => $product->image3,
            'image4' => $product->image4,
            'image5' => $product->image5,
            'manufacturer' => $product->manufacturer,
            'num' => $product->num,
            'primary' => $product->primary,
        );

        $id = (int) $product->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getProduct($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Album id does not exist');
            }
        }
    }

    public function deleteProduct($id)
    {
        $this->tableGateway->delete(array('id' => (int) $id));
    }
}