@extends('layouts.master')
@section('NoiDung')
<h2>php</h2>
<?php $khoahoc = array('php','laravel','js'); ?>

@forelse ($khoahoc as $item)
    @continue($item == "laravel")
    {{$item}}
@empty
    "Mảng rỗng"
@endforelse

@endsection
