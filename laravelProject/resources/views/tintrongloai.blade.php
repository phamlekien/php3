@extends('layouts.main')

@section('title', 'Tin trong loại')

@section('content')
    <h2>Danh sách tin theo loại</h2>
    <ul>
        @foreach ($tins as $tin)
            <li><a href="{{ url('/tin-tuc/' . $tin->id) }}">{{ $tin->tieude }}</a></li>
        @endforeach
    </ul>
    {{ $tins->links() }}
@endsection
