<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}" required>

    <label for="price">Giá:</label>
    <input type="number" id="price" name="price" value="{{ $product->price }}" required>

    <label for="description">Mô tả:</label>
    <textarea id="description" name="description">{{ $product->description }}</textarea>

    <button type="submit">Cập nhật</button>
</form>
