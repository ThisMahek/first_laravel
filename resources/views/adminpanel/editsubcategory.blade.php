
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Category</h4>
                         </div>
                  <form action="<?=base_url()?>Admin/add_edit_subcategory" method="post">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" value="<?=$row->name?>">
                      </div>
                    </div>    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                      <div class="col-sm-12 col-md-7">
                      <select class="form-control" name="cat_id">
                          <option value="">--Select Category--</option>
                  
                       <select>
                      </div>
                    </div>    
                                      
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                      <input type="hidden" value="update" name="type">
                     <input type="hidden" class="form-control" name="id" value="">
                        <button type="submit" class="btn btn-primary" >Edit</button>
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