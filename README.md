# Mọi người pull folder CODING về làm xong push lên lại nhé

# Làm xong nhớ test chạy đầy đủ rồi hẳn push lên

# Cấu trúc thư mục :

- Các file html bên ngoài ứng với từng trang
- Folder assets : bao gồm các folder chứa file khác như css, js, img, ...
  - css : base.css chứa các khai báo biến, style.css chứa toàn bộ file css của các trang (mọi người comment phần của mình vào bên trên và css vào đây, tránh css trực tiếp vào thẻ), nếu ai thấy phần css của mình ảnh hưởng đến các trang khác thì có thể tách riêng ra file css khác
  - js : đối với mỗi file mọi người nên tạo ra file js riêng
  - img : những ảnh không tương tác đến csdl thì thêm trực tiếp vào folder img, còn những ảnh phải đổ từ csdl ra thì bắt buộc phải tạo folder (ví dụ : slider, shoe, ...)

# Nên sử dụng bootstrap để hỗ trợ làm, phần nào tìm không thấy thì tự css

# Nhiệm vụ tuần này :

- Tiến : thiết kế csdl
- Nam : tạo môi trường csdl share link với mn, chỉnh sửa lại phần ui
- Thọ + Dũng : hoàn thành ui phần admin
- Nghĩa : làm lại phần ui

# admin website : management website for product
Code chính thức vào thư mục "manager-product-for-owner"
*Hoàn thành:
  - add-product: hoàn thành.
  - category: ...
  - product-list:
    + view-product: ...
    + edit-product: ...
    + remove-product: ...
  - inventory: ...
  - notification: ...
*Lưu ý:
  - Nhớ để file đúng thư mục.
  - Đã phân hàm ở controller. Làm trang nào thì tập trung vào hàm ở đó.
  Link get trang theo cấu trúc: /app/index.php?page=dashboard.
  Trong đó tham số page =  [các trang chính: dashboard, add-product, product-list, inventory, category, notification]
  Thêm ví dụ: /app/index.php?page=add-product&action=submit => điều hướng xử lý khi submit form thêm sản phẩm. Sau đó khi xử lý xong,  header('location: ../app/index.php?page=add-product'); => để điều hướng đến trang danh sách sản phẩm.
  - Nhớ đọc kỹ tên các file.
