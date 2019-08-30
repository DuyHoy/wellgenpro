@extends('admin.admin_layout')
@section('content')
<div class="row">
   
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Các Thể Loại</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  {{-- <th>#</th> --}}
                  <th>id</th>
                   
                  <th>Categories</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($categories as $categorie)
                    <tr>
                    <th scope="row">{{$categorie->id}}</th>
                  <td>{{$categorie->name}}</td>
                  {{-- <td>{{$categorie->content}}</td> --}}
                   
                </tr>
                @endforeach
                
                 
                 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
  </div>
@endsection