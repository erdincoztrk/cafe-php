<?php
include('../../Classes/dbConnection.php');

abstract class transaction
{
    protected $db;
    public $updateQuery;
    public $updateVariables;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public abstract function insert();

    public abstract function delete();

    public abstract function update();
}

class mainCategory extends transaction
{
    public $mainCategoryId = '';
    public $mainCategoryName = '';

    public function insert()
    {
        return $this->db->query("INSERT INTO tbmaincategory SET maincategory_id = ?, maincategory_name = ?", [$this->mainCategoryId, $this->mainCategoryName]);
    }

    public function delete()
    {
        return $this->db->deleteQuery("tbmaincategory", "maincategory_id", "{$this->mainCategoryId}");
    }

    public function update()
    {
        return $this->db->query("$this->updateQuery", [$this->updateVariables]);
        //   return $this->db->query("UPDATE tbmaincategory SET maincategory_name = ?", [$this->mainCategoryName]);
    }

}

class secondCategory extends mainCategory
{
    public $secondCategoryId = '';
    public $secondCategoryName = '';

    public function insert()
    {
        return $this->db->insertQuery("tbsecondcategory", "secondcategory_name, secondcategory_mainc", "{$this->secondCategoryName},{$this->mainCategoryId}");
    }

    public function delete()
    {
        return $this->db->deleteQuery("tbsecondcategory", "secondcategory_id", "{$this->secondCategoryId}");
    }

    public function update()
    {
        return $this->db->query("$this->updateQuery", [$this->updateVariables]);
    }

}

class product extends secondCategory
{
    public $productId = '';
    public $productName = '';
    public $productPrice;
    public $productDescription = '';
    public $productImage = '';

    public function insert()
    {
        return $this->db->insertQuery("product", "prdouct_name, product_price, product_description, product,secondc, product,mainc, product_image", "{$this->productName},{$this->productPrice},{$this->productDescription},{$this->secondCategoryId}, {$this->mainCategoryId},{$this->productImage}");
    }

    public function delete()
    {
        return $this->db->deleteQuery("tbproduct","product_id", "{$this->productId}");
    }

    public function update()
    {
        return $this->db->query("$this->updateQuery", [$this->updateVariables]);
    }
}

?>
