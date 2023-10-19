 @extends('adminpanel.layouts.main')
 @section('main-container')
 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <div class="row" style="width:100%">
                    <div class="col-md-11" >
                    <h4>Total Category</h4>
                    </div>
                    <div class="col-md-1">
                     <a href="{{url('addcategory')}}"> <button class="btn btn-primary">+Add</button></a>
                     <a href="{{url('/category/trash')}}"> <button class="btn btn-primary">Trash </button></a>
                    </div>
                 
</div>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="example">
                      <tr>
                        <th class="text-center">#</th>
                        <th> Name</th>
                        <th> Status</th>
                        <th>Action</th>
                      </tr>
                    @foreach($categories as $row)
                    
                      <tr>
                        <td class="p-0 text-center">1</td>
                        <td>{{$row->category_name}}</td>
                        <td>@if($row->status==1)
                          Active
                          @else
                          Inactive
                          @endif
                        <td>
                          {{-- <a href="{{url('/category/delete_category')}}/{{$row->cat_id}}"> --}}
                            <a href="{{route('category.delete_category',['id'=>$row->cat_id])}}">
                            <button class="btn btn-danger">Trash</button>
                          </a>
                          {{-- <a href="">
                            <button class="btn btn-danger">Soft Delete</button>
                          </a> --}}
                      <a href="{{route('category.edit',['id'=>$row->cat_id])}}"> <button class="btn btn-success">Edit</button></a>
                        </td>

                      </tr>
                      @endforeach
            
                   
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
                
          
        </section>
        </div>
    @endsection
        
  

