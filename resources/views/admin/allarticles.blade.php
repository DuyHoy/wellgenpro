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
                    </tr>
                  </thead>
                  <tbody>
    
                    @foreach ($allarticles as $article)
                        <tr>
                        <th scope="row">{{$article->id}}</th>
                      <td>{{$article->title}}</td>
                      <td>{{$article->content}}</td>
                      <td>{{$article->categories_id}}</td>
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