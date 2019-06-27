<?php


namespace App\Controllers;


use Core\Controller;

class AdminproductController extends Controller
{
  public function indexAction()
  {
    $this->view->render('admin/product/index');
  }
}