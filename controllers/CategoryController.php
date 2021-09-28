<?php

class CategoryController extends BaseController {
    private $categoryModel;

    public function __construct() {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel();
    }
    public function index() {
        $categories = $this->categoryModel->getAll();
        return $this->view('admin.categories.show', ['categories' => $categories]);
    }

    public function createCategory() {
        $name = $_POST['name'];
        $data = [
            'name' => $name
        ];

        $this->categoryModel->createCategory($data);
        $categories = $this->categoryModel->getAll();
        return $this->view('admin.categories.show', ['categories' => $categories]);
    }

    public function deleteCategory() {
        $id = $_GET['id'];
        $this->categoryModel->deleteCategory($id);
        $categories = $this->categoryModel->getAll();
        return $this->view('admin.categories.show', ['categories' => $categories]);
    }

    public function directCategory() {
        $id = $_GET['id'];
        $category = $this->categoryModel->findById($id);
        return $this->view('admin.categories.modifycategory', ['category' => $category]);
    }

    public function updateCategory() {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $data = [
            'name' => $name
        ];
        $this->categoryModel->updateCategory($id, $data);
        $categories = $this->categoryModel->getAll();
        return $this->view('admin.categories.show', ['categories' => $categories]);
    }
}