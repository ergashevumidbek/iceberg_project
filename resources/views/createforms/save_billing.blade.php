@extends('layouts.master')
@section('title')
Talabalardan To'lovlarni qabul qilish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
             Talabalardan To'lovlarni qabul qilish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">To'lovlar                           </li>
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
                    <label>To'lovchi</label>
                    <input class="form-control" type="text" placeholder="To'lovchi ismi">
                  </div>
                </div>
              </div>
              <div class="row">
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
                    <label>O'qituvchi</label>
                    <select class="form-select">
                      <option>Hourly</option>
                      <option>Fix price</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Qaysi oy uchun</label>
                    <input class="datepicker-here form-control" type="text" data-language="en" placeholder="To'lov qilmoqchi bolgan oy">
                  </div>
                </div>
              </div>
              <div class="row">
                
                <div class="col">
                  <div class="mb-3">
                    <label>Chegirmalar</label>
                    <input class=" form-control" type="text" placeholder="Agar mavjud bo'lsa">
                  </div>
                </div>
                
              </div>
              
              <div class="row">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="javascript:void(0)">Saqlash</a><a class="btn btn-danger" href="{{route('billing_table')}}">Bekor qilish</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection