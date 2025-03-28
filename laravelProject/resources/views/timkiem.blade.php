@extends('layouts.main')

@section('title', 'Kết quả tìm kiếm')

@section('content')
    <h2>Kết quả tìm kiếm</h2>
    <ul>
        @foreach ($tins as $tin)
            <li><a href="{{ url('/tin-tuc/' . $tin->id) }}">{{ $tin->tieude }}</a></li>
        @endforeach
    </ul>
    {{ $tins->links() }}
@endsection
cd
