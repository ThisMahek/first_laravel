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
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="product_name" value="" >
                        <span style="color:red">@error('product_name')
                          {{$message}}
                        @enderror
                        </span>
                      </div>
                    </div>                    
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Quantity</label>
                          <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control" name="qty" value="" >
                            <span style="color:red">@error('qty')
                              {{$message}}
                            @enderror
                            </span>
                          </div>
                        </div>                    
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                              <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                              <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="stock" value="" >
                                <span style="color:red">@error('stock')
                                  {{$message}}
                                @enderror
                                </span>
                              </div>
                            </div>                    
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">MRP</label>
                                  <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="mrp" value="" >
                                    <span style="color:red">@error('mrp')
                                      {{$message}}
                                    @enderror
                                    </span>
                                  </div>
                                </div>                    
                                </div>
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                                      <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="price" value="" >
                                        <span style="color:red">@error('price')
                                          {{$message}}
                                        @enderror
                                        </span>
                                      </div>
                                    </div>                    
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row mb-4">
                                          <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
                                          <div class="col-sm-12 col-md-7">
                                            <input type="file" class="form-control" name="image" value="" >
                                            <span style="color:red">@error('image')
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
                        <button type="submit" class="btn btn-primary" >Submit</button>
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