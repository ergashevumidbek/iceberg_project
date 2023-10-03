@extends('layouts.master')
@section('title')
Talaba Jadvali
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">
      
      <div class="col-sm-12 ">
        <div class="card">
          <div class="card-header pb-0">
            <h4>IceBerg talabalari</h4>
            <a href="{{route('create_student')}}" class="btn btn-danger" style="float:right;" type="button">Talaba qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Talaba ID</th>
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Ota-ona tel</th>
                    <th>Kurs yo'nalish</th>
                    <th>O'qituvchi</th>
                    <th>Kun</th>
                    <th>Kurs vaqti </th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td> ddsfvdfs</td>
                    <td>61</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td> 
                      <ul class="action"> 
                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                      </ul>
                    </td>
                  </tr>
                 
                </tbody>
                <tfoot>
                  <tr>
                    <th>№</th>
                    <th>Talaba ID</th>
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Ota-ona tel</th>
                    <th>Kurs yo'nalish</th>
                    <th>O'qituvchi</th>
                    <th>Kun</th>
                    <th>Kurs vaqti </th>
                    <th>Taxrirlash</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
@endsection