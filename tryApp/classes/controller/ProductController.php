<?php

require_once "classes/mapper/ProductMapper.php";

class ProductController{
    private $productMapper;

    /**
     * ProductController constructor.
     */
    public function __construct(){
        $this->productMapper = new ProductMapper();
    }

    public function overview(): array{
        return $this->productMapper->overview();
    }
}