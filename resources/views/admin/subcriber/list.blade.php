@extends('layouts.new-master', ['currentPage' => 'list'])
@section('page-title', 'Danh sách subcriber')
@section('active-list-subcribers','active')
@section('show-subcriber','show')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center" style="font-size: 30px;">Danh sách subcriber</h1>
        </div>
    </div>
    <div class="panel-body">
        @if(session()->has('message'))
            <div class="alert alert-success hidden">
            </div>
        @endif
        <table width="100%" class="table table-hover" id="dataTables-example" style="background-color: white">
            <thead>
            <tr>
                <th style="text-align: center">Họ và tên</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Địa chỉ</th>
                <th style="text-align: center">Số điện thoại</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subcribers as $item)
                <tr class="odd gradeX row-item" id="row-item-{{$item->id}}">
                    <td style="text-align: center">{{$item->name}}</td>
                    <td style="text-align: center">{{$item -> email}}</td>
                    <td style="text-align: center">{{$item -> address}}</td>
                    <td style="text-align: center">{{$item -> phone}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{asset('/js/account_list.js')}}"></script>
@endsection