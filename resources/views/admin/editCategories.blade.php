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
              <h4>Sửa Thể Loại</h4>
            </div>
            <div  class="card-body">
                <form  id="deleteForm" method="POST" action="/category/{{$category->id}}">
                  @csrf
                  @method('DELETE')
                
                </form>
              </div>    
            <form id="updateForm" class="form-horizontal" method="POST" action="/category/{{$category->id}}">
                @csrf
    
                @method('PATCH')
                <div class="row">
             
                  <div class="col-sm-10">
                    <div class="form-group-material">              
                      <input id="register-username" type="text" name="registerUsername" required="" class="input-material" value="{{$category->name}}">
                      <label for="register-username" class="label-material">Categories Name</label>
                    </div>
                    <div class="form-group-material">
                        {{-- <label for="register-username" class="label-material">Nội dung</label> --}}
                      
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                        {{-- <label class="col-sm-2 form-control-label">Thể Loại</label> --}}
                        {{-- <div class="col-sm-10 mb-3">
                          <select name="account" class="form-control">
                          </select>
                        </div> --}}
                      
                      </div>
                
              </form>
              <div class="form-group row">
                  <div class="col-sm-4 offset-sm-2">
                    <input type="submit" class="btn btn-primary"  form="updateForm" name="update" value="Sửa"/>
                  <input type="submit" class="btn btn-primary" name="delete"  form="deleteForm" value="Xóa" />
                  </div>
              </div>
            
          </div>
        </div>
      </div>
    </div>
</section>
@endsection