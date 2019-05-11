<div class="sidebar-nav slimscrollsidebar">
    <div class="sidebar-head">
        <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
    <div class="user-profile">
        <div class="dropdown user-pro-body">
            <div>
                @if(Auth::user()->image != '')
                    <img src="{{url('admin/images/users/'.Auth::user()->image)}}" alt="user-img" class="img-circle" style="width:60px;height:60px;border-radius:50%;">
                @else
                    <img src="{{url('admin/images/users/dfuser.png')}}" alt="user-img" class="img-circle" style="width:60px;height:60px;border-radius:50%;">
                @endif
            </div>
            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu animated flipInY">
                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                <li role="separator" class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       <i class="fa fa-power-off"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <ul class="nav" id="side-menu">
        {{-- settings --}}
        <li> <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-cog" data-icon="v"></i> <span class="hide-menu"> Settings <span class="fa arrow"></span> </span></a>
            <ul class="nav nav-second-level">
                <li> <a href="{{url('admin-panel/all-settings')}}"><i class="far fa-circle"></i><span class="hide-menu">   All Settings</span></a> </li>
            </ul>
        </li>

        {{-- Users --}}
        <li> <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-users" data-icon="v"></i> <span class="hide-menu"> Users <span class="fa arrow"></span> </span></a>
            <ul class="nav nav-second-level">
                <li> <a href="{{url('admin-panel/all-users')}}"><i class="far fa-circle"></i><span class="hide-menu">   All Users</span></a> </li>
                <li> <a href="{{url('admin-panel/add-users')}}"><i class="far fa-circle"></i><span class="hide-menu">   Add New User</span></a> </li>
            </ul>
        </li>

        {{-- ؛posts --}}
        <li> <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-paper-plane" data-icon="v"></i> <span class="hide-menu"> Posts <span class="fa arrow"></span> </span></a>
            <ul class="nav nav-second-level">
                <li> <a href="{{url('admin-panel/all-posts')}}"><i class="far fa-circle"></i><span class="hide-menu">   All Posts</span></a> </li>
                <li> <a href="{{url('admin-panel/add-posts')}}"><i class="far fa-circle"></i><span class="hide-menu">   Add New Post</span></a> </li>
            </ul>
        </li>

        {{-- ؛Services --}}
        <li> <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-server data-icon="v"></i> <span class="hide-menu"> Services <span class="fa arrow"></span> </span></a>
            <ul class="nav nav-second-level">
                <li> <a href="{{url('admin-panel/all-services')}}"><i class="far fa-circle"></i><span class="hide-menu">   All Services</span></a> </li>
                <li> <a href="{{url('admin-panel/add-new-service')}}"><i class="far fa-circle"></i><span class="hide-menu">   Add New Service</span></a> </li>
            </ul>
        </li>

        {{-- ؛Services --}}
        <li> <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-quote-left data-icon="v"></i> <span class="hide-menu"> Testmonials <span class="fa arrow"></span> </span></a>
            <ul class="nav nav-second-level">
                <li> <a href="{{url('admin-panel/all-testmonials')}}"><i class="far fa-circle"></i><span class="hide-menu">   All Testmonials</span></a> </li>
                <li> <a href="{{url('admin-panel/add-new-testmonial')}}"><i class="far fa-circle"></i><span class="hide-menu">   Add New Testmonial</span></a> </li>
            </ul>
        </li>

        {{-- Messages --}}
        <li> <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-envelope data-icon="v"></i> <span class="hide-menu"> Messages <span class="fa arrow"></span> </span></a>
            <ul class="nav nav-second-level">
                <li> <a href="{{url('admin-panel/all-messages')}}"><i class="far fa-circle"></i><span class="hide-menu">   All Messages</span></a> </li>
            </ul>
        </li>
    </ul>
</div>
