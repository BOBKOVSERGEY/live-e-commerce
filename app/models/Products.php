<?php


namespace App\Models;


use Core\Model;
use Core\Validators\EmailValidator;
use Core\Validators\MatchesValidator;
use Core\Validators\MaxValidator;
use Core\Validators\MinValidator;
use Core\Validators\NumericValidator;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;

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

  public function validator()
  {
    $this->runValidation(new RequiredValidator($this,['field'=>'name','msg'=>'Name is required.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'price','msg'=>'Price is required.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'list','msg'=>'Price List is required.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'shipping','msg'=>'Shipping is required.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'description','msg'=>'Description is required.']));

    $this->runValidation(new NumericValidator($this,['field'=>'price','msg'=>'Price must be a number.']));

  }
}