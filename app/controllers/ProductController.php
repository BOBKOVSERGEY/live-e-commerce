<?php


namespace App\Controllers;


use App\Models\Products;
use Core\Controller;
use Core\H;

class ProductController extends Controller
{
  public function indexAction()
  {
    $this->view->setSiteTitle('Каталог продуктов');
    $this->view->render('product/index');
  }

  public function detailsAction($product_id)
  {
    $productModel = new Products();
    $product = $productModel::findFirst([
      'conditions' => 'id = ?',
      'bind' => [$product_id]
    ]);
    //H::debug($product);

    $this->view->product = $product;

    $this->view->setSiteTitle($product->title);
    $this->view->render('product/details');
  }

}