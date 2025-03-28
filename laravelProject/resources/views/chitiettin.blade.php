@extends('layouts.main')

@section('title', $tin->tieude)

@section('content')
    <h2>{{ $tin->tieude }}</h2>
    <p>{{ $tin->noidung }}</p>
    <a href="{{ url('/') }}">Quay lại</a>
@endsection
