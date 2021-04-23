<?php
    require "classes/mapper/Database.php";

class ProductMapper extends Database {

    private $conn;

    /**
     * ProductMapper constructor.
     */
    public function __construct() {
        $this->conn = $this->getConnection();
    }

    /**
     * @return array filled with the overview
     */
    public function overview(): array{
        $productList = array();

        try{
            $query = "SELECT pro.id AS 'product_id', pro.name as 'product_name', pro.price, 
                            cat.id AS 'category_id', cat.name as 'category_name'
                        FROM product pro
                        INNER JOIN categorie cat ON pro.categorie_id = cat.id
                        ORDER BY pro.id ASC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            foreach ($result as $product){
                $product = new Product( $product->product_id,
                                        $product->category_id,
                                        $product->product_name,
                                        $product->category_name,
                                        $product->price);

                array_push($productList, $product);
            }

        } catch(Exception $exception){
            echo "<script>alert('overview error . ' + $exception )</script>";
        }
        return $productList;
    }
}