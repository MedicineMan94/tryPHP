<?php


class Product{

    private $product_id;
    private $category_id;
    private $product_name;
    private $category_name;
    private $price;

/**
 * EntProduct constructor.
 * @param $product_id
 * @param $category_id
 * @param $product_name
 * @param $category_name
 * @param $price
 */
public function __construct($product_id, $category_id, $product_name, $category_name, $price){
    $this->product_id = $product_id;
    $this->category_id = $category_id;
    $this->product_name = $product_name;
    $this->category_name = $category_name;
    $this->price = $price;
}

    /**
     * @return mixed
     */
    public function getProductId(){
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id): void{
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getCategoryId(){
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id): void{
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getProductName(){
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name): void{
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getCategoryName(){
        return $this->category_name;
    }

    /**
     * @param mixed $category_name
     */
    public function setCategoryName($category_name): void{
        $this->category_name = $category_name;
    }

    /**
     * @return mixed
     */
    public function getPrice(){
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void{
        $this->price = $price;
    }




}