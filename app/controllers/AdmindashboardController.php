<?php


namespace App\Controllers;


use Core\Controller;

class AdmindashboardController extends Controller
{
  public function indexAction()
  {
    $this->view->render('admin/dashboard/index');
  }
}