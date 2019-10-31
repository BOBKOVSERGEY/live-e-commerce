<?php


namespace App\Controllers;


use App\Models\Products;
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
    $product = new Products();
    //$product->name = 'Default Name';

    if ($this->request->isPost()) {
      $this->request->csrfCheck();

      $product->assign($this->request->get(), Products::blackList);
      //H::dnd($product);
      $product->save();
    }

    $this->view->product = $product;

    $this->view->displayErrors = $product->getErrorMessages();
    $this->view->formAction = PROOT . 'adminproduct/add';
    $this->view->render('admin/product/add');
  }

}