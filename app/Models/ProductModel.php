<?php

namespace App\Models;
use PDO;

class ProductModel extends BaseModel
{
    protected $tableName = 'products';

    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT $model->tableName.*,categories.cate_name FROM $model->tableName LEFT JOIN categories ON $model->tableName.cate_id = categories.id ";
        // echo $model->sqlBuilder;
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function getProductByCategory($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName where cate_id = $id";
        // echo $model->sqlBuilder;
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
}
