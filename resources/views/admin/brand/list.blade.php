@extends('layouts.new-master', ['currentPage' => 'list'])
@section('page-title', 'DANH SÁCH NHÃN HIỆU')
@section('active-list-brand','active')
@section('show-brand','show')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">DANH SÁCH NHÃN HIỆU</h1>
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
                <th style="text-align: center">Logo</th>
                <th style="text-align: center">Tên nhãn hiệu</th>
                <th style="text-align: center">Mô tả</th>
                <th style="text-align: center">Quốc gia</th>
                <th style="text-align: center">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($obj as $item)
                <tr class="odd gradeX row-item" id="row-item-{{$item->id}}">
                    <td style="text-align: center">
                        <img width="150px" src="{{$item->logo}}" style="max-height: 15%"/>
                    </td>
                    <td style="text-align: center">{{$item -> name}}</td>
                    <td>{{$item -> description}}</td>
                    <td>{{$item -> country}}</td>
                    <td class="black-icon" style="text-align: center">
                        <a href="#" class="fa fa-pencil btn-quick-edit mr-2"></a>
                        <a href="#" id="{{$item -> id}}" class="fa fa-trash mr-2"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{--Quick Edit Modal--}}
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Sửa thông tin nhãn hàng</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="quick_edit_form" method="post" action="/admin/quickUpdate/brand" enctype="multipart/form-data">
                        @method('PUT')
                        {{csrf_field()}}
                        <input type="hidden" name="quick-update-id">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                            <p class="alert-danger" style="margin-top: 1%"></p>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="country">
                            <p class="alert-danger" style="margin-top: 1%"></p>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" id="add_images">
                        </div>
                        <div class="preview_images form-group">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--Quick Edit Modal--}}
    <script src="{{asset('/js/brand_list.js')}}"></script>
@endsection