@extends('adminpanel.layouts.main')
@section('main-container')
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>{{$title}}</h4>
                         </div>
                  <form action={{url('/upload_image')}} method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="category_image" value="" >
                        <span style="color:red">@error('name')
                          {{$message}}
                        @enderror
                        </span>
                      </div>
                    </div>                    
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <input type="hidden" value="add" name="type">
                        <button type="submit" class="btn btn-primary" >upload</button>
</form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
@endsection