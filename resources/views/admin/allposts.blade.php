@extends('admin.admin_layout')
@section('content')
<div class="row">
   
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Các Bài Viết</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Content</th>
                      <th>Categories</th>
                   <th>Thao Tác</th>
                    </tr>
                  </thead>
                  
                  <tbody>
    
                    @foreach ($allposts as $post)
                        <tr>
                        <th scope="row">{{$post->id}}</th>
                      <td><h3 style="">{!!$post->title!!}</h3></td>
                      <td >{!!substr(strip_tags($post->content),0,500)!!}</td>
                      <td >{{$post->category['name']}}</td>
                      <td >
                
                        <a href={{url('posts',$id=$post->id)}} class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
    </a>
  
           
                  </td>
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