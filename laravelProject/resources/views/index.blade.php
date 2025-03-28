@extends('layouts.main')

@section('title', 'Trang Chủ')

@section('content')
    <h2>Danh sách tin tức</h2>
    <form action="{{ url('/tim-kiem') }}" method="GET">
        <input type="text" name="keyword" placeholder="Nhập từ khóa...">
        <button type="submit">Tìm kiếm</button>
    </form>
    <ul>
        @foreach ($tins as $tin)
            <li><a href="{{ url('/tin-tuc/' . $tin->id) }}">{{ $tin->tieude }}</a></li>
        @endforeach
    </ul>
    {{ $tins->links() }}
@endsection
