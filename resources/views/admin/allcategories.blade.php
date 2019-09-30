@extends('admin.admin_layout')
@section('content')
<style>a.btn:hover {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
}
a.btn {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -o-transform: scale(0.8);
    -webkit-transition-duration: 0.5s;
    -moz-transition-duration: 0.5s;
    -o-transition-duration: 0.5s;
}</style>
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
                  <th>Thao tác</th>
                  
                </tr>
              </thead>
              <tbody>

                @foreach ($categories as $categorie)
                    <tr>
                    <th scope="row">{{$categorie->id}}</th>
                  <td>{{$categorie->name}}</td>
                  <td>
                
                        <a href={{url('category',$id=$categorie->id)}} class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
    </a>
  
           
                  </td>
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