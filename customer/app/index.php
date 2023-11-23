<?php
include('../lib/database.php');
// $db = new Database();

if (isset($_GET['controller'])) {
    
    require '../Route/web.php'; 
} else {
    echo "HOME PAGE";
}
