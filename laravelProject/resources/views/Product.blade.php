<h1>phamlekien</h1>
<h2>Tên là: {{ $category }}</h2>

<table border="1">
    <thead>
        <tr>
            <th>Loại sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Products as $product)
        @if ($product->name != 'xiaomi')
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Sửa</a> |
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

<a href="{{ route('products.create') }}">Thêm sản phẩm</a>
