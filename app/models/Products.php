<?php


namespace App\Models;


use Core\Model;

class Products extends Model
{

  public $id;
  public $created_at;
  public $updated_at;
  public $title;
  public $description;
  public $vendor;
  public $brand;
  public $category;
  public $list_price;
  public $price;
  public $shipping;
  public $deleted = 0;

  protected static $_table='products';
  protected static $_softDelete = true;
}