@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="text-center"><b> Danh Sách Thông Tin Tài Khoản</b></h1>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Tên tài khoản</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    {{-- <th scope="col">Mật khẩu</th> --}}
                    <th scope="col">Trạng thái</th>
                  </tr>
                </thead>
                @foreach ($users as $key => $user)
                <tbody>
                  <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->login_id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    {{-- <td>{{ $user->password }}</td> --}}
                    <td>{{ $user->status }}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>            
              <div style="float:right">
                  {{ $users->links() }}
              </div>  
        </div>
        </div>
        <div class="col-lg-1"></div>
    </div>


@endsection
