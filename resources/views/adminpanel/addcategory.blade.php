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
                  <form action={{$url}} method="post">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" value="{{isset($categories->name)?$categories->name:""}}" >
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
                        <button type="submit" class="btn btn-primary" >Add</button>
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