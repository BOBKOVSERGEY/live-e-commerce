<?php


namespace App\Controllers;


use Core\Controller;
use Core\H;

class AdminproductController extends Controller
{
  public function __construct($controller, $action)
  {
    parent::__construct($controller, $action);
    $this->view->setLayout('admin');
  }

  public function indexAction()
  {
    $this->view->render('admin/product/index');
  }

  public function addAction()
  {
    $this->view->formAction = PROOT . 'adminproduct/add';
    $this->view->render('admin/product/add');
  }

}