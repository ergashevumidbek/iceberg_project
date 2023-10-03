@extends('layouts.master')
@section('title')
IceBerg O'quv Markazi Fanlari
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">
      
      
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>IceBerg O'quv Markazi Fanlari</h4>
            <a href="{{route('create_subject')}}" class="btn btn-danger" style="float:right;" type="button">Fan qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Fan yoki etab nomi</th>
                    <th>Fan raqam</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>61</td>
                    <td>2011/04/25</td>
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
                    <th>Fan yoki etab nomi</th>
                    <th>Fan raqam</th>
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