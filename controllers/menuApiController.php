<?php
require_once 'models/productModel.php';
require_once 'views/apiView.php';

class menuApiController
{
    private $view;
    private $model;

    function __construct()
    {
        $this->model = new ProductModel();
        $this->view = new ApiView();
    }

    function get()
    {
        $productos = $this->model->getAllProducts();
        echo $productos;
        return $this->view->response($productos, 200);
    }
}
