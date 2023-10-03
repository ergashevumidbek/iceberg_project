@extends('layouts.master')
@section('title')
O'qituvchilarni ro'yhatga olish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
             O'qituvchilarni ro'yhatga olish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">O'qituvchi qo'shish                           </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid project-create">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="form theme-form">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>O'qituvchi ism</label>
                    <input class="form-control" type="text" placeholder="Ism">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>O'qituvchi familya</label>
                    <input class="form-control" type="text" placeholder="Familya">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>O'qituvchi telifon</label>
                    <input class="form-control" type="number" placeholder="+998 99 999 99-99">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Fan</label>
                    <select class="form-select">
                      <option>Hourly</option>
                      <option>Fix price</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>O'qituvchi rasm</label>
                    <input class="datepicker-here form-control" type="file" >
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="javascript:void(0)">Saqlash</a><a class="btn btn-danger" href="{{route('teachers_table')}}">Cancel</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection