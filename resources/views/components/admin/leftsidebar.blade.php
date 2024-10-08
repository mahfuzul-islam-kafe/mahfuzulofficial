<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Dashboard</li>

                <li><a href="#"><i class="bx bx-food-menu"></i><span>Dashboard</span></a></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-dashboards">Portfolio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.portfolios.index')}}" key="t-default">List</a></li>
                        <li><a href="{{route('admin.portfolios.create')}}" key="t-default">Create</a></li>
                        <li><a href="{{route('admin.types.index')}}" key="t-default">types</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-code-block"></i>
                        <span key="t-dashboards">Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.services.index')}}" key="t-default">List</a></li>
                        <li><a href="{{route('admin.services.create')}}" key="t-default">create</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-plus"></i>
                        <span key="t-dashboards">About</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-default">List</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-dock-left"></i>
                        <span key="t-dashboards">Resume</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-default">List</a></li>
                        
                    </ul>
                </li>
                
                
               
                
                <li><a href="#"><i class="bx bxs-message-alt"></i><span>Contacts</span></a></li>
                {{-- <li><a href="#"><i class="bx bx-user"></i><span>Facts</span></a></li> --}}
                <li><a href="#"><i class="bx bxs-brightness"></i><span>Settings</span></a></li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
