<h1>day la trang chu</h1>
<form action="{{ route('product.store') }}" method="POST">
    <label for="product_name">tên sản phẩm</label>
    <input type="text" id="name" name="name" required>
    <label for="price">giá sản phẩm</label>
    <input type="number" id="price" name="price" required>
    <label for="description">số lượng</label>
    <input type="number" id="description" name="description" required>
    <button>thêm sản phẩm</button>
</form>
