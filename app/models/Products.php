<?php


namespace App\Models;


use Core\Model;

class Products extends Model
{

  public $id;
  public $created_at;
  public $updated_at;
  public $name;
  public $price;
  public $list;
  public $shipping;
  public $description;
  public $deleted = 0;

  protected static $_table='products';
  protected static $_softDelete = true;

  public function beforeSave()
  {
    $this->timeStamps();
  }
}