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
                         <form action="{{$url}}"  method="post">
                          @csrf
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Category Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name"  value="{{isset($subcategories->name)?$subcategories->name:""}}">
                        <span class="text-danger">
                          @error('name')
                          {{$message}}
                          @enderror
                        </span>
                      </div>
                    </div>   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" name="cat_id">
                          <option value="">--Select Category--</option>
                         @foreach($categories as $row)
                          <option value="{{$row->cat_id}}" {{($row->cat_id==isset($subcategories->cat_id)?$subcategories->cat_id:"")?'selected':"" }}>{{$row->name}}</option>
                          @endforeach
                          
                        </select>
                        <span class="text-danger">
                          @error('cat_id')
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
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>
@endsection