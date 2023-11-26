<?php
include_once "../lib/database.php";
include_once "../model/category.php";
?>

<?php
class Category_Model{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function insert_category($category_name, $category_obj){
        $query = "INSERT INTO category (category_name, object) VALUES ('$category_name', '$category_obj')";
        $result = $this->db->insert($query);
        return $result;
    }

    public function show_category(){
        $query = "SELECT * FROM category";
        $result = $this->db->select($query);
    
        $categories = array();
    
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $categories[] = $row;
            }
        }
    
        return $categories;
    }
    public function get_category($category_id){
        $query = "SELECT * FROM category WHERE id = '$category_id'";        
        $result = $this->db->select($query);
        return $result;
    }
    
    public function get_category_by_obj_name($category_name,$category_obj){
        $query = "SELECT * FROM category WHERE category_name = '$category_name' AND object = '$category_obj'";        
        $result = $this->db->select($query);
        return $result;
    }
    public function update_category($category_name, $category_obj, $category_id){
        $query = "UPDATE category SET category_name = '$category_name', object = '$category_obj' WHERE id = '$category_id'";
        $result = $this->db->update($query);
        return $result;
    }
    public function delete_category($category_id){
        $query = "DELETE FROM category WHERE id = '$category_id'";
        $result = $this->db->delete($query);
        return $result;
    }
};

?>