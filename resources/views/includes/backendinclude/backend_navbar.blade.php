<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="index.html"><img src="" alt="" class="img-responsive logo">Burgeon - Dashboard</a>
        </div>
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="fas fa-arrow-circle-left"></i></button>
            </div>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                </div>
            </form>
        
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="far fa-question-circle"></i> <span>Help</span> <i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Basic Use</a></li>
                            <li><a href="#">Working With Data</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Troubleshooting</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>ADMIN</span> <i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="{{ url('/admin/settings') }}"><i class="fas fa-cog"></i><span>Settings</span></a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->