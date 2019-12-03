<?php
function showToggle($url){
    $current_url = url()->current();
    if($current_url == $url){
        return 'show active';
    }else{
        return '';
    }
}
?>
<!-- sidebar-->
<aside class="aside-container">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
            <!-- START sidebar nav-->
            <ul class="sidebar-nav">
                <!-- START user info-->
                <!-- END user info-->
                <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                </li>
                <li class=" @php echo  showToggle(url('adminn/profile/ht')); @endphp" >
                    <a href="{{url('adminn/profile/ht')}}" title="Documentation">
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">မူလ</span>
                    </a>
                </li>
                {{--လွှတ်တော်ဖွဲ့စည်းပုံ--}}
                <li class=" @php echo  showToggle(url('adminn/group')); @endphp" >
                    <a href="{{url('adminn/group')}}" title="Documentation">
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION">လွှတ်တော်</span>
                    </a>
                </li>
                {{--ကိုယ်စားလှယ်--}}
                <li class=" ">
                    <a href="#tech" title="Layouts" data-toggle="collapse">
                        <em class="icon-layers"></em>
                        <span> ကိုယ်စားလှယ်</span><span class="fa fa-arrow-down float-right"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse" id="tech">
                        <li class="sidebar-subnav-header">Category <span class="fa fa-arrow-down float-right"></span></li>
                        <li class=" @php echo  showToggle(url('adminn/region')); @endphp" >
                            <a href="{{url('adminn/region')}}" title="Documentation">
                                <em class="icon-grid"></em>
                                <span data-localize="sidebar.nav.DOCUMENTATION">ပြည်နယ်/တိုင်း</span>
                            </a>
                        </li>
                        {{--<li class=" @php echo  showToggle('ht'); @endphp" >--}}
                        {{--<a href="{{url('adminn/ht/category')}}" title="Documentation">--}}
                        {{--<em class="icon-grid"></em>--}}
                        {{--<span data-localize="sidebar.nav.DOCUMENTATION">လွှတ်တော်  (For PM)</span>--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        <li class="@php echo  showToggle(url('adminn/ht')); @endphp">
                            <a href="{{url('adminn/ht')}}" title="Widgets">
                                <em class="icon-grid"></em>
                                <span data-localize="sidebar.nav.WIDGETS">အမတ် (PM)</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--News--}}
                <li class=" @php echo  showToggle(url('adminn/news')); @endphp">
                    <a href="{{url('adminn/news')}}" title="သတင်း">
                        <em class="icon-graduation"></em>
                        <span>သတင်း</span>
                    </a>
                </li>
                {{--For PDB Upload--}}
                <li class=" @php echo  showToggle(url('adminn/pdf')); @endphp">
                    <a href="{{url('adminn/pdf')}}" title="Publication">
                        <em class="icon-graduation"></em>
                        <span>Publication</span>
                    </a>
                </li>
                @if(auth()->user()->role=='full')
                <li class="@php echo  showToggle(url('adminn/user')); @endphp">
                    <a href="{{url('adminn/user')}}" title="Logout">
                        <em class="fa fa-user"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION"></span>
                        <span>Manage User</span>
                    </a>
                </li>
                @endif

                <li class=" ">
                    <a href="{{url('adminn/logout')}}" title="Logout">
                        <em class="icon-logout"></em>
                        <span data-localize="sidebar.nav.DOCUMENTATION"></span>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>
<!-- offsidebar-->
<aside class="offsidebar d-none">
    <!-- START Off Sidebar (right)-->
    <nav>
        <div role="tabpanel">
            <!-- Nav tabs-->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-user fa-lg"></em>
                    </a>
                </li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
                <div class="tab-pane fade active show" id="app-settings" role="tabpanel">
                    <h3 class="text-center text-thin mt-4">Settings</h3>
                    <div class="p-2">
                        <h4 class="text-muted text-thin">Themes</h4>
                        <div class="row row-flush mb-2">
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-a.css">
                                        <input type="radio" name="setting-theme" checked="checked">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-b.css">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-c.css">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-d.css">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                        <span class="color bg-white"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-flush mb-2">
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-e.css">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-f.css">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-g.css">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                       <span class="color bg-purple"></span>
                                    </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col mb-2">
                                <div class="setting-color">
                                    <label data-load-css="css/theme-h.css">
                                        <input type="radio" name="setting-theme">
                                        <span class="icon-check"></span>
                                        <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                       <span class="color bg-danger"></span>
                                    </span>
                                        <span class="color bg-gray-dark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <h4 class="text-muted text-thin">Layout</h4>
                        <div class="clearfix">
                            <p class="float-left">Fixed</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="float-left">Boxed</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="float-left">RTL</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-rtl" type="checkbox">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <h4 class="text-muted text-thin">Aside</h4>
                        <div class="clearfix">
                            <p class="float-left">Collapsed</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="float-left">Collapsed Text</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-collapsed-text" type="checkbox" data-toggle-state="aside-collapsed-text">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="float-left">Float</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="float-left">Hover</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="float-left">Show Scrollbar</p>
                            <div class="float-right">
                                <label class="switch">
                                    <input id="chk-scroll" type="checkbox" data-toggle-state="show-scrollbar" data-target=".sidebar">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="app-chat" role="tabpanel">
                    <h3 class="text-center text-thin mt-4">Connections</h3>
                    <div class="list-group">
                        <!-- START list title-->
                        <div class="list-group-item border-0">
                            <small class="text-muted">ONLINE</small>
                        </div>
                        <!-- END list title-->
                        <div class="list-group-item list-group-item-action border-0">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/05.jpg" alt="Image">
                                <div class="media-body text-truncate">
                                    <a href="#">
                                        <strong>Juan Sims</strong>
                                    </a>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                </div>
                                <div class="ml-auto">
                                    <span class="circle bg-success circle-lg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/06.jpg" alt="Image">
                                <div class="media-body text-truncate">
                                    <a href="#">
                                        <strong>Maureen Jenkins</strong>
                                    </a>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                </div>
                                <div class="ml-auto">
                                    <span class="circle bg-success circle-lg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/07.jpg" alt="Image">
                                <div class="media-body text-truncate">
                                    <a href="#">
                                        <strong>Billie Dunn</strong>
                                    </a>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                </div>
                                <div class="ml-auto">
                                    <span class="circle bg-danger circle-lg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/08.jpg" alt="Image">
                                <div class="media-body text-truncate">
                                    <a href="#">
                                        <strong>Tomothy Roberts</strong>
                                    </a>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                </div>
                                <div class="ml-auto">
                                    <span class="circle bg-warning circle-lg"></span>
                                </div>
                            </div>
                        </div>
                        <!-- START list title-->
                        <div class="list-group-item border-0">
                            <small class="text-muted">OFFLINE</small>
                        </div>
                        <!-- END list title-->
                        <div class="list-group-item list-group-item-action border-0">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/09.jpg" alt="Image">
                                <div class="media-body text-truncate">
                                    <a href="#">
                                        <strong>Lawrence Robinson</strong>
                                    </a>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                </div>
                                <div class="ml-auto">
                                    <span class="circle bg-warning circle-lg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action border-0">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle thumb48" src="img/user/10.jpg" alt="Image">
                                <div class="media-body text-truncate">
                                    <a href="#">
                                        <strong>Tyrone Owens</strong>
                                    </a>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                </div>
                                <div class="ml-auto">
                                    <span class="circle bg-warning circle-lg"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 py-4 text-center">
                        <!-- Optional link to list more users-->
                        <a class="btn btn-purple btn-sm" href="#" title="See more contacts">
                            <strong>Load more..</strong>
                        </a>
                    </div>
                    <!-- Extra items-->
                    <div class="px-3 py-2">
                        <p>
                            <small class="text-muted">Tasks completion</small>
                        </p>
                        <div class="progress progress-xs m-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 py-2">
                        <p>
                            <small class="text-muted">Upload quota</small>
                        </p>
                        <div class="progress progress-xs m-0">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                <span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Off Sidebar (right)-->
</aside>