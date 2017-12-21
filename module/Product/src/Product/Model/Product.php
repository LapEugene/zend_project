<?php

namespace Product\Model;

class Product
{
    public $id;
    public $product_name;
    public $sku;
    public $stock;
    public $prouduct_url;
    public $price;
    public $image;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $manufacturer;
    public $num;
    public $primary;

    public function exchangeArray($data)
    {
        $this->product_name     = (!empty($data['product_name'])) ? $data['product_name'] : null;
        $this->sku = (!empty($data['sku'])) ? $data['sku'] : null;
        $this->stock  = (!empty($data['stock'])) ? $data['stock'] : null;
        $this->prouduct_url  = (!empty($data['prouduct_url'])) ? $data['prouduct_url'] : null;
        $this->price  = (!empty($data['price'])) ? $data['price'] : null;
        $this->image  = (!empty($data['image'])) ? $data['image'] : null;
        $this->image2  = (!empty($data['image2'])) ? $data['image2'] : null;
        $this->image3  = (!empty($data['image3'])) ? $data['image3'] : null;
        $this->image4  = (!empty($data['image4'])) ? $data['image4'] : null;
        $this->image5  = (!empty($data['image5'])) ? $data['image5'] : null;
        $this->manufacturer  = (!empty($data['manufacturer'])) ? $data['manufacturer'] : null;
        $this->num  = (!empty($data['num'])) ? $data['num'] : null;
        $this->primary  = (!empty($data['primary'])) ? $data['primary'] : null;
    }
}