<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
           <nav>
               <ul class="nav">
                       <li><a href="{{ url('/admin/dashboard') }}" class="active"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

                       <li><a href="{{ url('/admin/settings') }}" class=""><i class="fas fa-cog"></i> <span>Settings</span></a></li>
                       <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fas fa-table" aria-hidden="true"></i><span>Categories</span> <i class="fas fa-angle-down"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{{ url('/admin/create-category') }}" class="">Create Categories</a></li>
                                    <li><a href="{{ url('/admin/category') }}" class="">View Categories</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="fas fa-table" aria-hidden="true"></i><span>Products</span> <i class="fas fa-angle-down"></i></a>
                            <div id="subPages1" class="collapse ">
                                <ul class="nav">
                                    <li><a href="{{ url('/admin/create-product') }}" class="">Create Products</a></li>
                                    <li><a href="{{ url('/admin/product') }}" class="">View Products</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="fas fa-table" aria-hidden="true"></i><span>Coupons</span> <i class="fas fa-angle-down"></i></a>
                            <div id="subPages2" class="collapse ">
                                <ul class="nav">
                                        <li><a href="{{ url('/admin/add-coupon') }}" class="">Create Coupons</a></li>
                                        <li><a href="{{ url('/admin/view-coupon') }}" class="">View Coupons</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="fas fa-table" aria-hidden="true"></i><span>Cms Pages</span> <i class="fas fa-angle-down"></i></a>
                            <div id="subPages3" class="collapse ">
                                <ul class="nav">
                                        <li><a href="{{ url('/admin/add-cms-page') }}" class="">Create CMS Page</a></li>
                                        <li><a href="{{ url('/admin/view-cms-page') }}" class="">View CMS Page</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                                <a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="fas fa-table" aria-hidden="true"></i><span>Orders</span> <i class="fas fa-angle-down"></i></a>
                                <div id="subPages4" class="collapse ">
                                    <ul class="nav">
                                            <li><a href="{{ url('/admin/view-orders') }}" class="">View Orders</a></li>
                                    </ul>
                                </div>
                        </li>
                        <li>
                                <a href="#subPages5" data-toggle="collapse" class="collapsed"><i class="fas fa-table" aria-hidden="true"></i><span>Users</span> <i class="fas fa-angle-down"></i></a>
                                <div id="subPages5" class="collapse ">
                                    <ul class="nav">
                                            <li><a href="{{ url('/admin/view-users') }}" class="">View Users</a></li>
                                    </ul>
                                </div>
                        </li>

                       
               </ul>				
           </nav>
       </div>
   </div>
   <!-- END LEFT SIDEBAR -->