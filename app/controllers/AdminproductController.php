<?php


namespace App\Controllers;


use Core\Controller;
use Core\H;

class AdminproductController extends Controller
{

  public function indexAction()
  {
    $this->view->setLayout('admin');
    $this->view->render('admin/product/index');
  }

}