<?php
class HomeController extends BaseController{
    private $orderModel;
    private $reviewModel;

    public function __construct()
    {
        $this->loadModel('OrderModel');
        $this->loadModel('ReviewModel');
        $this->orderModel = new OrderModel();
        $this->reviewModel = new ReviewModel();
    }

    public function index(){
        $odrers = $this->orderModel->getAll();
        $reviews = $this->reviewModel->getAll();
        return $this->view('admin.home.index', ['orders' => $odrers, 'reviews' => $reviews]);
    }
    
}
?>