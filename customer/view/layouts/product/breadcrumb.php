<nav aria-label="breadcrumb">
      <ol class="breadcrumb px-5 py-2 bg-light fs-6">
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="../app/index.php">Trang chủ</a></li>
        <li class="breadcrumb-item">
          <a class="text-black link-underline link-underline-opacity-0 breadcrumb__item"
          href="../app/index.php?item_list&&category_id=<?php echo $category['id']; ?>">
            <?php echo $category['category_name'] . '-' . $category['object']; ?>
          </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $product['product_name']; ?></li>
      </ol>
    </nav>
