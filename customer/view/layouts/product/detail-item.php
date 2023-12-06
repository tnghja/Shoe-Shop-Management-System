<?php $user_id = "null";
if (isset($_SESSION['user-id'])) {
    $user_id = $_SESSION['user-id'];
}
?>

<div class="detail-item w-85 mx-auto">
  <div class="d-flex">
    <div class="col w-50">
    <img class='m-3 w-95' src="<?php echo $avatar; ?>" alt="">
  </div>

  <div class="col w-50 m-3">
    <h2><?php echo $product['product_name']; ?></h2>
    <p class="text-danger fs-4"><?php echo $product['price']; ?> đ</p>
    <p class="fs-5">Tình trạng : <span class="text-primary"><?php if ($quantity > 0) {
    echo "Còn hàng ($quantity)";
} else {
    echo "Hết hàng";}?></span></p>
    <div class="shoe-color">
      <p class="fs-5 mb-2">Chọn màu :</p>
      <div class="d-flex">
        <?php foreach ($colors_of_product as $color) {?>
          <a class="w-15 text-decoration-none text-dark text-center thumbnail" href="../app/index.php?detail_item&&product_id=<?php echo $product_id; ?>&&color_id=<?php echo $color['color_id']; ?>&&size_id=<?php echo $size_id; ?>">
          <img class='w-95 <?php if ($color['color_id'] == $color_id) {
    echo 'border border-black';}?>' src="<?php echo $color['product_img']; ?>" alt="">
          <p><?php echo $color['color_name']; ?></p>
        <?php }?>
      </a>

      </div>
    </div>

    <div class="shoe-size mt-2">
      <p class="fs-5 mb-2">Chọn kích thước :</p>
      <?php foreach ($sizes_of_productColor as $size) {?>
        <a class="btn <?php if ($size['size_id'] == $size_id) {
    echo 'btn-dark';
} else {
    echo 'btn-outline-secondary';}?>" href="../app/index.php?detail_item&&product_id=<?php echo $product_id; ?>&&color_id=<?php echo $color_id; ?>&&size_id=<?php echo $size['size_id']; ?>"><?php echo $size['size_name']; ?></a>
      <?php }?>
    </div>

    <div class="shoe-count mt-4 d-flex">
      <p class="fs-5 my-auto">Số lượng :</p>
      <input type="number" id="quantity" class="ms-3 w-25 text-center form-control p-1" min='1' value="1" max='<?php echo $quantity; ?>'>
    </div>

    <div class="order">
      <button type="button" id="buy-btn" class="w-50 fs-5 btn btn-dark m-5" onclick="add_item_handler(<?php echo $quantity; ?>, <?php echo $user_id ?>)">Đặt mua</button>
    </div>


  </div>
  </div>


  <div class="des m-3">
    <h3 class="m-0 mb-2">Mô tả sản phẩm</h3>
    <p><?php echo $product['description']; ?></p>
  </div>
</div>

<div class="modal" id="limitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Giới hạn số lượng sản phẩm</h5>
                </div>
                <div class="modal-body">
                    <p>Số lượng sản phẩm đặt mua vượt quá giới hạn tồn kho.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" onclick="closeModal()">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="add-item-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Có lỗi đã xảy ra :) </h5>
                </div>
                <div class="modal-body">
                    <p>Vui lòng thử lại sau :))).</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" onclick="closeModal()">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="add-item-success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm thành công :)</h5>
                </div>
                <div class="modal-body">
                    <p>Mời bạn mua sắm tiếp.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mx-auto" onclick="location.reload()">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>