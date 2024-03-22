    <div class="container-fluid p-0">
        <div class="mx-5">
            <h2 class="text-center my-4"> <?php if ($search != '') {
    echo 'Kết quả tìm kiếm cho "' . $search . '"';} else {echo $category['category_name'] . '-' . $category['object'];}?> </h2>
            <div class="<?php if ($search != '') {
    echo 'hide';
}
?>">
                <div class="">
                <div class="btn-group">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Màu sắc </button>
                    <div class="dropdown-menu">
                        <div class="d-flex flex-row">
                            <?php foreach ($color_list as $color) {
    $onclick = true;
    $disable = '';
    if ($color->getColorState()) {
        $onclick = false;
        $disable = 'disabled';
    }
    ?>
                            <a aria-disabled=<?php echo $onclick; ?> href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor . $color->getId() . ','; ?>&&size=<?php echo $filteredSize; ?>&&price=<?php echo $price; ?>" class="item-list__filter mx-1 text-center <?php echo $disable ?>">
                                <img src="<?php echo $color->getColorImg(); ?>" class="w-100 h-100 img-fluid rounded-circle border border-1" alt="...">
                                <!-- <i class="bi bi-check-lg text-white"></i> -->
                            </a>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Kích thước </button>
                    <div class="dropdown-menu">
                        <div class="d-flex flex-row">
                            <?php foreach ($size_list as $size) {
    $onclick = true;
    $disable = '';
    if ($size->getSizeState()) {
        $onclick = false;
        $disable = 'disabled';
    }
    ?>
                            <a <?php echo $disable ?> aria-disabled=<?php echo $onclick; ?> href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $filteredSize . $size->getId() . ','; ?>&&price=<?php echo $price; ?>" class="rounded-circle bg-secondary-subtle item-list__filter mx-1 border border-1 text-center text-black text-decoration-none <?php echo $disable ?>">
                                <?php echo $size->getSizeName(); ?>
                            </a>
                            <?php }?>
                        </div>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Giá </button>
                    <div class="dropdown-menu item-list__filter-price">
                        <div class="mx-3">
                            <label for="customRange3" class="form-label w-100">
                                <p class="text-center m-0">Giá từ: 0 đ - <span id="choice_price">2000000</span> đ</p>
                            </label>
                            <input onmouseup="getPrice('../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $filteredSize; ?>&&price=')" type="range" class="form-range" min="0" max="2000000" step="50000" id="customRange3" value="0">
                        </div>
                    </div>
                </div>

                <div class="item-list__sort float-end">
                    <button class="btn btn-light dropdown-toggle border border-1" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false"> Sắp xếp theo </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?php if ($sort == '1') {echo 'steelblue';}?>" href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $filteredSize; ?>&&price=<?php echo $price; ?>&&sort=1">Giá: Tăng dần</a></li>
                        <li><a class="dropdown-item <?php if ($sort == '2') {echo 'steelblue';}?>" href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $filteredSize; ?>&&price=<?php echo $price; ?>&&sort=2">Giá: Giảm dần</a></li>
                        <li><a class="dropdown-item <?php if ($sort == '3') {echo 'steelblue';}?>" href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $filteredSize; ?>&&price=<?php echo $price; ?>&&sort=3">Tên: A-Z</a></li>
                        <li><a class="dropdown-item <?php if ($sort == '4') {echo 'steelblue';}?>" href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $filteredSize; ?>&&price=<?php echo $price; ?>&&sort=4">Tên: Z-A</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-3">
                <?php foreach ($filteredColor_list as $color) {?>
                    <a href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $color_model->remove_color($_GET['color'], $color->getId()); ?>&&size=<?php echo $filteredSize; ?>&&price=<?php echo $price; ?>" class="btn border border-primary filter-btn"><?php echo $color->getColorName(); ?><i class="p-1 bi bi-x-circle text-primary"></i></a>
                <?php }?>
                <?php foreach ($filteredSize_list as $size) {?>
                    <a href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $size_model->remove_size($_GET['size'], $size->getId()); ?>&&price=<?php echo $price; ?>" class="btn border border-primary filter-btn"><?php echo $size->getSizeName(); ?><i class="p-1 bi bi-x-circle text-primary"></i></a>
                <?php }?>
                <?php if ($price != '') {?>
                    <a href="../app/index.php?item_list&&category_id=<?php echo $_GET['category_id']; ?>&&color=<?php echo $filteredColor; ?>&&size=<?php echo $filteredSize; ?>&&price=" class="btn border border-primary filter-btn"><<?php echo $price; ?> đ<i class="p-1 bi bi-x-circle text-primary"></i></a>
                <?php }?>
            </div>
            </div>


            <div class="row row-cols-1 row-cols-md-5 g-4 mt-5">
                <?php $i = 0;
if ($product_list) {
    foreach ($product_list as $product) {
        $product_id = $product["id"];
        $colors_of_product = $product_model->get_colors_of_product($product_id);
        if (!$colors_of_product) {
            continue;
        }
        $color_id = $colors_of_product[0]['color_id'];
        $avatar = $product_model->get_avatar($product_id, $color_id);
        $sizes_of_productColor = $product_model->get_sizes_of_productColor($product_id, $color_id);
        if (!$sizes_of_productColor) {
            continue;
        }
        $size_id = $sizes_of_productColor[0]['size_id'];
        $i++;
        ?>
                    <a class="item-list__card-link px-3 link-underline link-underline-opacity-0"  href="../app/index.php?detail_item&&product_id=<?php echo $product['id']; ?>&&color_id=<?php echo $color_id ?>&&size_id=<?php echo $size_id ?>">
                        <div class="item-list__card card col p-0 h-100 rounded-0">
                            <img src="<?php echo $avatar; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fs-6"><?php echo $product['product_name']; ?></h5>
                                <p class="card-text"><?php echo $product['price']; ?>đ</p>
                            </div>
                        </div>
                    </a>
                    <?php }
}if ($i == 0) {?>
                    <div class="pb-5">Không tìm thấy kết quả phù hợp</div>
                <?php }?>
            </div>
            <div class="<?php if (!$product_list || $limited) {
    echo 'hide';
}
?>">
                <div class="d-flex justify-content-center my-5">
                    <a href="<?php if ($viewmore) {
    echo str_replace('&&viewmore', '', $_SERVER['REQUEST_URI']);
} else {
    echo $_SERVER['REQUEST_URI'] . '&&viewmore';
}?>" type="button" class="item-list__view-more-btn btn btn-primary"><?php if ($viewmore) {
    echo 'Thu gọn';
} else {
    echo 'Xem thêm';
}?>
</a>
                </div>
            </div>


        </div>

    </div>
