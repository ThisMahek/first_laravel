@extends('adminpanel.layouts.main')
@section('main-container')
<div class="main-content">
        <section class="section">
          <div class="section-body">
            
                <div class="card">
                  <div class="card-header">
                    <h4>Add Product</h4>
                  </div>
                  
                  
<div class="card-block table-border-style">


<label for="name">Product name <span class="important">*</span></label>
<input type="text" name="name" class="form-control" id="name" requird="">
</div>
<div class="card" id="appendform">
<div class="card-body">
<div class="row">
<div class="col-md-10">
<div class="row">
<div class="col-md-3">
<input type="text" class="form-control autonumber" placeholder="Quantity*" name="qty1[]">
</div>
<div class="col-md-3">
<input type="text" class="form-control autonumber" placeholder="MRP*" name="mrp1[]"></div>
<div class="col-md-3">
<input type="text" class="form-control autonumber" placeholder="Price*" name="price1[]"></div>
<div class="col-md-3">
<input type="text" class="form-control autonumber" placeholder="Stock*" name="stock1[]"></div>
</div>
<div class="col-md-2">
<button class="btn btn-success" id="appendformclick" onclick="education_fields()">+</button>
<div style="" id="getColor" ></div>
 <div style="" id="education_fields" ></div>
</div>
</div>
</div>
</div>
</div>
</div>
</form></div>             
</div>
          </div>
        </section>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script>
 var room = 1;
    var ro = 1;
    function education_fields() {

        room++;
        var objTo = document.getElementById('appendform')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass"+room);
        var rdiv = 'removeclass'+room;
        divtest.innerHTML = '<div class="row"></br><div class="col-sm-2 nopadding">' +
            '<div class="form-group">' +
            '<input type="text" class="form-control" id="attribute_name" name="cat_id[]" value="" placeholder="Category id" required>' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-2 nopadding">' +
            '<div class="form-group">' +
            '<input type="number" class="form-control" min="1" id="mrp" name="sub_cat_id[]" value="" placeholder=" MRP" required>' +
            '</div>' +            
            '</div>' +
            '<div class="col-sm-2 nopadding">' +
            '<div class="form-group">' +
            '<input type="number" class="form-control" id="price"  min="1" name="price[]" value="" placeholder="Attribute Price" required>' +
            '</div>' +
            '</div>' +
            '<div class="col-sm-1 nopadding">'+
                '<div class="form-group">'+
                    '<input type="text" class="form-control" id="stock" min="1" name="stock[]" oninput="" placeholder="Stock" required>'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-1 nopadding">'+
                '<div class="form-group">'+
                    '<input type="text" class="form-control" id="unit" name="unit[]" oninput="" placeholder="Unit" required>'+
                '</div>'+
            '</div>'+
            '<div class="col-sm-2 nopadding">' +
            '<div class="fileinput fileinput-new text-center" data-provides="fileinput">' +
            '<div class="fileinput-new thumbnail">' +
                // '<img width="100%" height="100%" src="" />' +
            '</div>' +
            '</div>' +
            '</div>' +
            
            '<div class="col-sm-2 nopadding">' +
            '<div class="form-group">' +
            '<div class="input-group"> ' +
            '<div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="fa fa-minus" aria-hidden="true"></span> </button></div>' +
    +
            '</div></div></div></div>';
ro++;
        objTo.appendChild(divtest)
    }
     
    function remove_education_fields(rid) {
        $('.removeclass'+rid).remove();
    }


        </script>