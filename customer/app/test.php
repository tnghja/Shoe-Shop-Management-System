<?php
include_once "../model/color_model.php";
$color_model = new Color_Model();
$color_list = $color_model->get_color_list();
foreach ($color_list as $color) {
    echo $color->getColorImg();
}
