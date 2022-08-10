@extends('layouts.master')

@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="text text-success"><b> <h4>{{session::get('success')}}</h4> </b></div>
    @endif
    <h1 class="text-center"><b> Xin Chào {{ $user->full_name}}</b></h1>
    <h3> <span class="badge badge-info">  Tổng số tài khoản là: {{ $users}} </span> </h3>
    <h4> <span class="badge badge-warning"> Thông tin cá nhân </span> </h4>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2"> <b>  Họ tên : </b></div>
        <div class="col-lg-2"> <b> {{ $user->full_name}}</b> </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2"> <b>  Số điện thoại : </b></div>
        <div class="col-lg-2"> <b> {{ $user->phone}}</b> </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2"> <b>  Email : </b></div>
        <div class="col-lg-2"> <b> {{ $user->email}}</b> </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2"> <b>  Tên tài khoản : </b></div>
        <div class="col-lg-2"> <b> {{ $user->login_id }}</b> </div>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-2"> <b>  Trạng thái : </b></div>
        <div class="col-lg-2">
            @if ($user->status == '0')
            <b> Ẩn</b> 
            @else 
            <b> Hiện</b>
            @endif
        </div>
    </div>
    
</div>

@endsection
{{-- <b> {{ $user->status}}</b> --}}