<?php
include_once "../model/category_model.php";
class Controller
{
    private $categoryModel;
    public function controlContent()
    {
        if (isset($_GET['add-category'])) {
            $this->categoryModel = new Category_Model();
            if (isset($_POST['add_category'])) {
                $category_name = $_POST['category_name'];
                $category_obj = $_POST['category_obj'];
                if (!$this->categoryModel->get_category_by_obj_name($category_name, $category_obj)){
                    $insert_category = $this->categoryModel->insert_category($category_name, $category_obj);
                }
                else {
                    echo "<script>window.location = '../app/index.php?add-category'</script>";
                }
            }
            $show_category = $this->categoryModel->show_category();
            include_once '../view/add-category.php';
        }
        else if (isset($_GET['delete-category'])) {
            $this->categoryModel = new Category_Model();
            if (!isset($_GET['category_id']) || $_GET['category_id'] == null) {
                echo "<script>window.location = '../app/index.php?add-category'</script>";
            } else {
                $category_id = $_GET['category_id'];
            }
            $delete_category = $this->categoryModel->delete_category($category_id);
            echo "<script>window.location = '../app/index.php?add-category'</script>";
        }else if (isset($_GET['edit-category'])) {
            $this->categoryModel = new Category_Model();
            $category_id = $_GET['category_id'];    
            $edit_category = $this->categoryModel->get_category($category_id);
            $result = $edit_category->fetch_assoc();
            include_once '../view/edit-category.php';
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $category_name = $_POST['category_name'];
                $category_obj = $_POST['category_obj'];
                $update_category = $this->categoryModel->update_category($category_name, $category_obj, $category_id);
                echo "<script>window.location = '../app/index.php?add-category'</script>";
            }
        }
        else {
            include_once '../view/dashboard.php';
        }
    }
    public function invoke()
    {
        $this->controlContent();
    }
}
