@extends('layouts.master')
@section('title')
Talabani ro'yhatga olish
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>
             Talabani ro'yhatga olish</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Bosh sahifa</li>
            <li class="breadcrumb-item active">Talaba qo'shish                           </li>
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
                    <label>Ismingiz</label>
                    <input class="form-control" type="text" placeholder="Talaba ismi *">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label>Familya</label>
                    <input class="form-control" type="text" placeholder="Talaba familyasi">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Ota ona telifon</label>
                    <input class="form-control" type="text" placeholder="+99899999999">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Kurs yo'nalish</label>
                    <select class="form-select">
                      <option>Fan turini tanlang</option>
                      <option>Fix price</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Kun</label>
                    <select class="form-select">
                      <option>Kurs kuni</option>
                      <option>Dushanba-Chorshanba-Juma</option>
                      <option>Seshanba-Payshanba-Shanba</option>
                      <option>Haftaning har kuni</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
              
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Kurs vaqti "-dan"</label>
                    <input class=" form-control" type="time" >
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="mb-3">
                    <label>Kurs vaqti "-gacha"</label>
                    <input class=" form-control" type="time" >
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mb-3">
                  <label>O'qituvchini tanlang</label>
                  <select class="form-select">
                    <option>Tanlang</option>
                    <option>Dushanba-Chorshanba-Juma</option>
                    <option>Seshanba-Payshanba-Shanba</option>
                    <option>Haftaning har kuni</option>
                  </select>
                </div>
              </div>
              
              <div class="row">
                <div class="col">
                  <div class="text-end"><a class="btn btn-success me-3" href="#">Saqlash</a><a class="btn btn-danger" href="{{route('students_table')}}">Bekor qilish</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection