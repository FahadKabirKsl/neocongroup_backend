<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img
            class="img-90 rounded-circle" src="{{ asset('assets/images/dashboard/1.png') }}" alt="" />
        <div class="badge-bottom"><span class="badge " style="color: #FF6536;background:#262626">New</span></div>

        @if (Auth::check())
            <a href="#">
                <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
            </a>
            <p class="mb-0 font-roboto">{{ Auth::user()->email }}</p>
        @endif
        <ul>
            <li>
                <span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
            </li>
            <li>
                <span>2 year</span>
                <p>Experince</p>
            </li>
            <li>
                <span><span class="counter">95.2</span>k</span>
                <p>Follower</p>
            </li>
        </ul>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    {{-- <li class="sidebar-main-title">
                    </li> --}}

                    {{-- blog --}}
                    {{-- <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Blog</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="{{route('blog.create')}}" class="#">Create Blog</a></li>
                            <li><a href="{{route('blog.index')}}" class="#">List of Blog</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Digital Booth</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="{{route('booth.create')}}" class="#">Create Digital Booth</a></li>
                            <li><a href="{{route('booth.index')}}" class="#">List of Digital Booth</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Branch</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="{{route('branch.create')}}" class="#">Create Branch</a></li>
                            <li><a href="{{route('branch.index')}}" class="#">List of Branch</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Employee</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="{{route('employee.create')}}" class="#">Create Employee</a></li>
                            <li><a href="{{route('employee.index')}}" class="#">List of Employee</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>IPO</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="{{route('ipo.create')}}" class="#">Create IPOs</a></li>
                            <li><a href="{{route('ipo.index')}}" class="#">List of IPOs</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Media</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="{{route('media.create')}}" class="#">Create Media</a></li>
                            <li><a href="{{route('media.index')}}" class="#">List of Media</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Partner</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="{{route('partner.create')}}" class="#">Create Partner</a></li>
                            <li><a href="{{route('partner.index')}}" class="#">List of Partner</a></li>
                        </ul>
                    </li> --}}
                    {{-- user --}}
                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)"><i
                                data-feather="user"></i><span>User</span></a>
                        <ul class="nav-submenu menu-content" style="display: none;">
                            <li><a href="#" class="#">Create User</a></li>
                            <li><a href="#" class="#">List of User</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
