@extends('admin.admin_layout')
@section('content')
<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">Forms            </h1>
      </header>
      <div class="row">
    
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Tạo Bài Viết Mới</h4>
            </div>
            <div class="card-body">
              <form class="form-horizontal" method="POST" action="/posts" enctype="multipart/form-data">
                @csrf

                <div class="row">
             
                  <div class="col-sm-10">
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="title" required="" class="input-material">
                      <label for="register-username" class="label-material">Tiêu Đề</label>
                    </div>
                    <div class="form-group-material">
                         
                        <label for="register-username" class="label-material">Nội dung</label>
                        <textarea id="mytextarea" name="mytextarea">Hello, World!</textarea>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Thể Loại</label>
                        <div class="col-sm-10 mb-3">
                          <select name="categories_id" class="form-control" required="">
                           
                           @foreach ($categories as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach
                          </select>
                        </div>
                      
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Hình Ảnh</label>
                        <input type="file" value="Hình Ảnh" name="images">
                      </div>
                <div class="form-group row">
                  <div class="col-sm-4 offset-sm-2">
                    {{-- <button type="submit" class="btn btn-secondary">Hủy</button> --}}
                    <button type="submit" class="btn btn-primary">Tạo</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection