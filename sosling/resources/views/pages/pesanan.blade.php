@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($pesanan)>0)
    <ul class='list-group'>    
        @foreach($pesanan as $pesanan)
        <li class='list-group-item'>{{$pesanan}}</li>
        @endforeach
    </ul>
    @endif
    <p>Pesan liburan anda sekarang</p>
@endsection
