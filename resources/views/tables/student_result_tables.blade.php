@extends('layouts.master')
@section ('title')
IceBerg Talabalarining Natijalari 
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">
      
      
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>IceBerg Talabalarining Natijalari</h4>
            <a href="{{route('create_sutudent_result')}}" class="btn btn-danger" style="float:right;" type="button">Natija qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Talab ID</th>
                    <th>Talaba ism va familya</th>
                    <th>Fan va etab</th>
                    <th>Guruh</th>
                    <th>To'plangan ball</th>
                    <th>Imtihon sanasi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>5646516</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td> dsdsd</td>
                    <td>61</td>
                    <td>2011/04/25</td>
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
                    <th>Talab ID</th>
                    <th>Talaba ism va familya</th>
                    <th>Fan va etab</th>
                    <th>Guruh</th>
                    <th>To'plangan ball</th>
                    <th>Imtihon sanasi</th>
                    <th>Action</th>
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