@extends('admin.admin_layout')
@section('content')
<section class="forms">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">Forms            </h1>
      </header>
      <div class="row">
        {{-- <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Basic Form</h4>
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <form>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" placeholder="Email Address" class="form-control">
                </div>
                <div class="form-group">       
                  <label>Password</label>
                  <input type="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">       
                  <input type="submit" value="Signin" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-lg-6">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Horizontal Form</h4>
            </div>
            <div class="card-body">
              <p>Lorem ipsum dolor sit amet consectetur.</p>
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="col-sm-2">Email</label>
                  <div class="col-sm-10">
                    <input id="inputHorizontalSuccess" type="email" placeholder="Email Address" class="form-control form-control-success"><small class="form-text">Example help text that remains unchanged.</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Password</label>
                  <div class="col-sm-10">
                    <input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning"><small class="form-text">Example help text that remains unchanged.</small>
                  </div>
                </div>
                <div class="form-group row">       
                  <div class="col-sm-10 offset-sm-2">
                    <input type="submit" value="Signin" class="btn btn-primary">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-lg-8">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Inline Form</h4>
            </div>
            <div class="card-body">
              <form class="form-inline">
                <div class="form-group">
                  <label for="inlineFormInput" class="sr-only">Name</label>
                  <input id="inlineFormInput" type="text" placeholder="Jane Doe" class="mr-3 form-control">
                </div>
                <div class="form-group">
                  <label for="inlineFormInputGroup" class="sr-only">Username</label>
                  <input id="inlineFormInputGroup" type="text" placeholder="Username" class="mr-3 form-control form-control">
                </div>
                <div class="form-group">
                  <input type="submit" value="Submit" class="mr-3 btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-lg-4">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Modal Form</h4>
            </div>
            <div class="card-body text-center">
              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Form in simple modal </button>
              <!-- Modal-->
              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 id="exampleModalLabel" class="modal-title">Signin Modal</h5>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                      <p>Lorem ipsum dolor sit amet consectetur.</p>
                      <form>
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" placeholder="Email Address" class="form-control">
                        </div>
                        <div class="form-group">       
                          <label>Password</label>
                          <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">       
                          <input type="submit" value="Signin" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h4>Tạo Bài Viết Mới</h4>
            </div>
            <div class="card-body">
              <form class="form-horizontal">
                <div class="row">
             
                  <div class="col-sm-10">
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="registerUsername" required="" class="input-material">
                      <label for="register-username" class="label-material">Tiêu Đề</label>
                    </div>
                    <div class="form-group-material">
                        <input id="register-username" type="text" name="registerUsername" required="" class="input-material">
                        <label for="register-username" class="label-material">Nội dung</label>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Thể Loại</label>
                        <div class="col-sm-10 mb-3">
                          <select name="account" class="form-control">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                          </select>
                        </div>
                      
                      </div>
                  
                
                <div class="form-group row">
                  <div class="col-sm-4 offset-sm-2">
                    <button type="submit" class="btn btn-secondary">Hủy</button>
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