<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
       <div class="sidebar-brand">
          <a href="index-2.html"> <img alt="image" src="{{url('admin/img/logo3.png')}}" class="header-logo" /> <span
                class="logo-name">Test</span>
          </a>
       </div>
       <div class="sidebar-user">
          <div class="sidebar-user-picture">
             <img alt="image" src="{{url('admin/img/logo3.png')}}">
          </div>
          <div class="sidebar-user-details">
             <div class="user-name">Test </div>
             <div class="user-role">Administrator</div>
          </div>
       </div>
       <ul class="sidebar-menu">
          <li class="menu-header">Main</li>
          <li class="active">
             <a href="{{url('adminindex')}}" class="nav-link"><i class="fa fa-tachometer"
                   aria-hidden="true"></i><span>Dashboard</span></a>
          </li>
          <li class="dropdown">
             <a href="#" class="nav-link has-dropdown"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Manage
                   Categories</span></a>
             <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('totalcategory')}}">Total Categories</a></li>
                <li><a class="nav-link" href="{{url('addcategory')}}">Add Categories</a></li>
             </ul>
          </li>
          <li class="dropdown">
             <a href="#" class="nav-link has-dropdown"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Manage
                   Sub Categories</span></a>
             <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{url('totalsubcategory')}}">Total Sub Categories</a></li>
                <li><a class="nav-link" href="{{url('subcategory')}}">Add Sub Categories</a></li>
             </ul>
          </li>
          <li class="dropdown">
             <a href="#" class="nav-link has-dropdown"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Manage
                   Product</span></a>
             <ul class="dropdown-menu">
                <li><a class="nav-link" href="totalproduct">Total Product</a></li>
                <li><a class="nav-link" href="addproduct">Add Product</a></li>
             </ul>
          </li>
       </ul>
    </aside>
 </div>
 <!--end sidebar--->