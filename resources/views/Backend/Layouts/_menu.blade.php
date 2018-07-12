<nav id="mainnav-container">
    <div id="mainnav">
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <img class="img-circle img-md" src="@if (Auth::check()) {{ url('') }}/{{Auth::user()->avatar}} @endif" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <p class="mnp-name">@if (Auth::check()) {!! Auth::user()->name !!} @endif</p>
                                <span class="mnp-desc">@if (Auth::check()) {!! Auth::user()->email !!} @endif</span>
                            </a>
                        </div>
                    </div>

                   <!--  <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active-sub active': '' }}">
                        <a href="">
                            <i class="demo-pli-male"></i>
                            <span class="menu-title"> Người dùng</span>
                        </a>
                    </li>    -->
                    <ul id="mainnav-menu" class="list-group">
                        <li class="list-divider"></li>
                        <li class="list-header">Quản lí</li> 
                        <li class="
                                {{ request()->is('admin/users') 
                                || request()->is('admin/users/*')
                                || request()->is('admin/roles') 
                                || request()->is('admin/roles/*')
                                ? 'active-sub active': '' }}">
                            <a href="#">
                                <i class="demo-pli-male"></i>
                                <span class="menu-title">Người dùng</span>
                                <i class="arrow"></i>
                            </a>                    
                            <ul class="collapse">
                                <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active-link': '' }}">
                                    <a href="{{ route('users.index') }}"><i class="ti-angle-double-right">
                                    </i>Người dùng</a>
                                </li>
                                <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active-link': '' }}">
                                    <a href="{{ route('roles.index') }}"><i class="ti-angle-double-right"></i>Chức vụ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-divider">
                        </li>
                    </ul>
                    <div class="mainnav-widget">
                        <div class="show-small">
                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                <i class="demo-pli-monitor-2"></i>
                            </a>
                        </div>
                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>