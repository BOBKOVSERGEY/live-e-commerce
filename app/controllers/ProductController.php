<?php


namespace App\Controllers;


use Core\Controller;

class ProductController extends Controller
{
  public function indexAction()
  {
    $this->view->setSiteTitle('Каталог продуктов');
    $this->view->render('product/index');
  }

}