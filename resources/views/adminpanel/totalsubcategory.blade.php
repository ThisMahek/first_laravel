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
                     <a href="addcategory"> <button class="btn btn-primary">+Add</button></a>
                    </div>
                 
</div>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped" id="example">
                      <tr>
                        <th class="text-center">#</th>
                        <th> Subcategory </th>
                        <th> Category</th>
                        <th>Action</th>
                      </tr>
                   
                     
                        @foreach($subcategories as $row)
                        <tr>
                          <td>1</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->cat_id}}</td>
                        <td>
                        <a href="{{url('/deletesub_cat')}}/{{$row->id}}">  <button class="btn btn-danger">Delete</button></a>
                      <a href="{{url('/editsubcat')}}/{{$row->id}}"> <button class="btn btn-success">Edit</button></a>
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

