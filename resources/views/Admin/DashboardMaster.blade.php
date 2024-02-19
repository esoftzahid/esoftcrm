<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>@yield('title')</title>

    <!-- vendor css -->
    <link href="{{ asset('/') }}Admin/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('/') }}Admin/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('/') }}Admin/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('/') }}Admin/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="{{ asset('/') }}Admin/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}Admin/lib/chartist/chartist.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}Admin/css/bracket.css">

    <style>
        table.dataTable>thead>tr>th:not(.sorting_disabled), table.dataTable>thead>tr>td:not(.sorting_disabled) {
            padding-right: 30px;
            color: white;
        }
    </style>
</head>

<body>

<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href="#">

        <img src="https://esoft.com.bd/assets/view/images/logo.png" style="width: 100%; height: 50px;">

</div>




<div class="br-sideleft overflow-y-auto">
    <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
    <div class="br-sideleft-menu">
        <a href="{{ route('dashboard') }}" class="br-menu-link active">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-home " style="font-size: 16px;"></i>
                <span class="menu-item-label">Dashboard</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-navicon" style="font-size: 16px"></i>
                <span class="menu-item-label">Menu</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">

            <li class="nav-item"><a href="{{ route('addmenu') }}" class="nav-link">Add Menu</a></li>
            <li class="nav-item"><a href="{{ route('menu.index') }}" class="nav-link">All Menu</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-newspaper" style="font-size: 16px"></i>
                <span class="menu-item-label">Page</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">

            <li class="nav-item"><a href="{{ route('addpage') }}" class="nav-link">Add Page</a></li>
            <li class="nav-item"><a href="{{ route('page.index') }}" class="nav-link">All Page</a></li>
        </ul>

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-list-alt" style="font-size: 16px"></i>
                <span class="menu-item-label">News & Notice</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">

            <li class="nav-item"><a href="{{ route('addnews') }}" class="nav-link">Add News & Notice</a></li>
            <li class="nav-item"><a href="{{ route('news.index') }}" class="nav-link">All News & Notice</a></li>
        </ul>

        <a href="mailbox.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-envelope" style="font-size: 16px;"></i>
                <span class="menu-item-label">Mailbox</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="card-dashboard.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-picture-o" style="font-size: 16px"></i>
                <span class="menu-item-label">Cards &amp; Widgets</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-file" style="font-size: 16px"></i>
                <span class="menu-item-label">UI Elements</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
            <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
            <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
            <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
            <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
            <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
            <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
            <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
            <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
            <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
            <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-redo-alt" style="font-size: 16px"></i>
                <span class="menu-item-label">Navigation</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="navigation.html" class="nav-link">Basic Nav</a></li>
            <li class="nav-item"><a href="navigation-layouts.html" class="nav-link">Nav Layouts</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-pie-chart" style="font-size: 16px"></i>
                <span class="menu-item-label">Charts</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
            <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
            <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
            <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
            <li class="nav-item"><a href="chart-chartist.html" class="nav-link">Chartist</a></li>
            <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
            <li class="nav-item"><a href="chart-peity.html" class="nav-link">Peity</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-gear" style="font-size: 16px"></i>
                <span class="menu-item-label">Forms</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="form-elements.html" class="nav-link">Form Elements</a></li>
            <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
            <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
            <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
            <li class="nav-item"><a href="form-editor-code.html" class="nav-link">Code Editor</a></li>
            <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-bookmark" style="font-size: 16px"></i>
                <span class="menu-item-label">Tables</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
            <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-navicon" style="font-size: 16px"></i>
                <span class="menu-item-label">Maps</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
            <li class="nav-item"><a href="map-leaflet.html" class="nav-link">Leaflet Maps</a></li>
            <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
        </ul>
        <a href="#" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-briefcase" style="font-size: 16px"></i>
                <span class="menu-item-label">Utilities</span>
                <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
            <li class="nav-item"><a href="background.html" class="nav-link">Background</a></li>
            <li class="nav-item"><a href="border.html" class="nav-link">Border</a></li>
            <li class="nav-item"><a href="height.html" class="nav-link">Height</a></li>
            <li class="nav-item"><a href="margin.html" class="nav-link">Margin</a></li>
            <li class="nav-item"><a href="padding.html" class="nav-link">Padding</a></li>
            <li class="nav-item"><a href="position.html" class="nav-link">Position</a></li>
            <li class="nav-item"><a href="typography-util.html" class="nav-link">Typography</a></li>
            <li class="nav-item"><a href="width.html" class="nav-link">Width</a></li>
        </ul>
        <a href="pages.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-paper-plane" style="font-size: 16px"></i>
                <span class="menu-item-label">Apps &amp; Pages</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="layouts.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-book" style="font-size: 16px"></i>
                <span class="menu-item-label">Layouts</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="sitemap.html" class="br-menu-link">
            <div class="br-menu-item">
                <i class="menu-item-icon fa fa-list-alt" style="font-size: 16px"></i>
                <span class="menu-item-label">Sitemap</span>
            </div><!-- menu-item -->
        </a><!-- br-menu-link -->
    </div><!-- br-sideleft-menu -->

    <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>

    <div class="info-list">
        <div class="d-flex align-items-center justify-content-between pd-x-15">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Memory Usage</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">CPU Usage</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">140.05</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Disk Usage</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">82.02%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- d-flex -->

        <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
            <div>
                <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Daily Traffic</p>
                <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- d-flex -->
    </div><!-- info-lst -->

    <br>
</div><!-- br-sideleft -->
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<div class="br-header">
    <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="fa fa-navicon"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div><!-- input-group -->
    </div><!-- br-header-left -->
    <div class="br-header-right">
        <nav class="nav">

            <div class="dropdown">
                <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
                    <img src="https://esoft.com.bd/assets/view/images/logo.png" class="wd-32 rounded-circle" alt="">
                    <span class="square-10 bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-header wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href="#"><i class="fa fa-user" style="padding-right:4px "></i> Edit Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog" style="padding-right: 4px"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-download" style="padding-right: 4px"></i> Downloads</a></li>
                        <li><a href="#"><i class="fa fa-star" style="padding-right: 4px"></i> Favorites</a></li>
                        <li><a href="#"><i class="fa fa-folder" style="padding-right: 4px"></i> Collections</a></li>
                        <li><a href="{{ route('admin.signout') }}"><i class="fa fa-sign-out" style="padding-right: 4px"></i> Sign Out</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </nav>

    </div><!-- br-header-right -->
</div><!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->


<!-- ########## START: RIGHT PANEL ########## -->
<div class="br-sideright">
    <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i class="icon ion-ios-folder-outline tx-22"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i class="icon ion-ios-gear-outline tx-24"></i></a>
        </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
            <div class="contact-list pd-x-10">
                <a href="#" class="contact-list-link new">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img2.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Marilyn Tarter</p>
                            <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                        </div>
                        <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0 ">Belinda Connor</p>
                            <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link new">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Britanny Cevallos</p>
                            <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                        </div>
                        <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link new">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Brandon Lawrence</p>
                            <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                        </div>
                        <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Andrew Wiggins</p>
                            <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Theodore Gristen</p>
                            <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-success"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Deborah Miner</p>
                            <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
            </div><!-- contact-list -->


            <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
            <div class="contact-list pd-x-10">
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img2.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Marilyn Tarter</p>
                            <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="mg-l-10">
                            <p class="mg-b-0">Belinda Connor</p>
                            <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Britanny Cevallos</p>
                            <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Brandon Lawrence</p>
                            <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img6.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Andrew Wiggins</p>
                            <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Theodore Gristen</p>
                            <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
                <a href="#" class="contact-list-link">
                    <div class="d-flex">
                        <div class="pos-relative">
                            <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                            <div class="contact-status-indicator bg-gray-500"></div>
                        </div>
                        <div class="contact-person">
                            <p class="mg-b-0">Deborah Miner</p>
                            <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                        </div>
                    </div><!-- d-flex -->
                </a><!-- contact-list-link -->
            </div><!-- contact-list -->

        </div><!-- #contacts -->


        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
            <div class="media-file-list">
                <div class="media">
                    <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-image-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43445</p>
                        <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-12 op-5">1.2mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-video-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">VID_6543</p>
                        <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                        <p class="mg-b-0 tx-12 op-5">24.8mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-word-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Tax_Form</p>
                        <p class="mg-b-0 tx-12 op-5">Word Document</p>
                        <p class="mg-b-0 tx-12 op-5">5.5mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Getting_Started</p>
                        <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                        <p class="mg-b-0 tx-12 op-5">12.7mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Introduction</p>
                        <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                        <p class="mg-b-0 tx-12 op-5">7.7mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-image-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43420</p>
                        <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-12 op-5">2.2mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-image-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">IMG_43447</p>
                        <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                        <p class="mg-b-0 tx-12 op-5">3.2mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-video-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">VID_6545</p>
                        <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                        <p class="mg-b-0 tx-12 op-5">14.8mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
                <div class="media mg-t-20">
                    <div class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                        <i class="fa fa-file-word-o tx-28 tx-white"></i>
                    </div>
                    <div class="media-body">
                        <p class="mg-b-0 tx-13">Secret_Document</p>
                        <p class="mg-b-0 tx-12 op-5">Word Document</p>
                        <p class="mg-b-0 tx-12 op-5">4.5mb</p>
                    </div><!-- media-body -->
                    <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                </div><!-- media -->
            </div><!-- media-list -->
        </div><!-- #history -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
            <div class="pd-x-25">
                <h2 id="brTime" class="tx-white tx-lato mg-b-5"></h2>
                <h6 id="brDate" class="tx-white tx-light op-3"></h6>
            </div>

            <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
            <div class="datepicker sidebar-datepicker"></div>


            <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
            <div class="pd-x-25">
                <div class="list-group sidebar-event-list mg-b-20">
                    <div class="list-group-item">
                        <div>
                            <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                            <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
                        </div>
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- list-group-item -->
                    <div class="list-group-item">
                        <div>
                            <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                            <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
                        </div>
                        <a href="#" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- list-group-item -->
                </div><!-- list-group -->

                <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+ Add Event</a>
                <br>
            </div>

        </div>
        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
            <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

            <div class="pd-y-20 pd-x-25 tx-white">
                <h6 class="tx-13 tx-normal">Sound Notification</h6>
                <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
                <div class="pos-relative">
                    <input type="checkbox" name="checkbox" class="switch-button" checked>
                </div>
            </div>

            <div class="pd-y-20 pd-x-25 tx-white">
                <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your phone.</p>
                <div class="pos-relative">
                    <input type="checkbox" name="checkbox2" class="switch-button">
                </div>
            </div>

            <div class="pd-y-20 pd-x-25 tx-white">
                <h6 class="tx-13 tx-normal">Location Services</h6>
                <p class="op-5 tx-13">Allowing us to access your location</p>
                <div class="pos-relative">
                    <input type="checkbox" name="checkbox3" class="switch-button">
                </div>
            </div>

            <div class="pd-y-20 pd-x-25 tx-white">
                <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
                <div class="pos-relative">
                    <input type="checkbox" name="checkbox4" class="switch-button" checked>
                </div>
            </div>

            <div class="pd-y-20 pd-x-25 tx-white">
                <h6 class="tx-13 tx-normal">Your email</h6>
                <div class="pos-relative">
                    <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10" value="janedoe@domain.com">
                </div>
            </div>

            <div class="pd-y-20 pd-x-25">
                <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account Settings</a>
                <a href="#" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy Settings</a>
            </div>

        </div>
    </div><!-- tab-content -->
</div><!-- br-sideright -->
<!-- ########## END: RIGHT PANEL ########## --->

@yield('mainpanel')


<script src="{{ asset('/') }}Admin/lib/jquery/jquery.js"></script>
<script src="{{ asset('/') }}Admin/lib/popper.js/popper.js"></script>
<script src="{{ asset('/') }}Admin/lib/bootstrap/bootstrap.js"></script>
<script src="{{ asset('/') }}Admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{ asset('/') }}Admin/lib/moment/moment.js"></script>
<script src="{{ asset('/') }}Admin/lib/jquery-ui/jquery-ui.js"></script>
<script src="{{ asset('/') }}Admin/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="{{ asset('/') }}Admin/lib/peity/jquery.peity.js"></script>
<script src="{{ asset('/') }}Admin/lib/chartist/chartist.js"></script>
<script src="{{ asset('/') }}Admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="{{ asset('/') }}Admin/lib/d3/d3.js"></script>
<script src="{{ asset('/') }}Admin/lib/rickshaw/rickshaw.min.js"></script>


<script src="{{ asset('/') }}Admin/js/bracket.js"></script>
<script src="{{ asset('/') }}Admin/js/ResizeSensor.js"></script>
<script src="{{ asset('/') }}Admin/js/dashboard.js"></script>
<script>
    $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>

@yield('script')
</body>
</html>
