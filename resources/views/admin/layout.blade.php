<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="dist/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="dist/modules/summernote/summernote-lite.css">
    <link rel="stylesheet" href="dist/modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="dist/css/demo.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <!-- 
    <link rel="stylesheet" href="css/dropify.min.css">
    <link rel="stylesheet" href="css/codebase.min.css"> -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit"><i class="ion ion-search"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="dist/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <img alt="image" src="dist/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="dist/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="dist/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <img alt="image" src="dist/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
                            <i class="ion ion-android-person d-lg-none"></i>
                            <div class="d-sm-none d-lg-inline-block">Hi, Delia Meta Putri</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.html" class="dropdown-item has-icon">
                                <i class="ion ion-android-person"></i> Profile
                            </a>
                            <a href="{{ url('/logout') }}" class="dropdown-item has-icon">
                                <i class="ion ion-log-out"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Grand Trisula</a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="dist/img/avatar/delia.jpg">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">Delia Meta Putri</div>
                            <div class="user-role">
                                Administrator
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="active">
                            <a href="{{ url('/admin') }}"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
                        </li>

                        <li class="menu-header">Menu</li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-android-create"></i><span>Post</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="{{ url('/newpost') }}"><i class="ion ion-ios-circle-outline"></i>Add New</a></li>
                                <li><a href="{{ url('/post') }}"><i class="ion ion-ios-circle-outline"></i>Post</a></li>
                                <li><a href="{{ url('/kategori') }}"><i class=" ion ion-ios-circle-outline"></i>Categories</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="ion ion-image"></i><span>Image Slider</span></a>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-building"></i><span>Room</span></a>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-android-clipboard "></i><span>Reservation</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i>Check in</a></li>
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i>Check Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="ion-ribbon-b"></i><span>Facilities</span></a>
                        </li>
                        <li>
                            <a href="#" class="has-dropdown"><i class="ion ion-coffee"></i><span>Restaurant</span></a>
                            <ul class="menu-dropdown">
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i>Schedule</a></li>
                                <li><a href="#"><i class="ion ion-ios-circle-outline"></i>Menu</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="ion ion-ios-calendar-outline"></i><span>Event</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion ion-android-mail"></i><span>Inbox</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion ion-ios-telephone"></i><span>Info Contact</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion ion-ios-person"></i><span>User</span></a>
                        </li>



                </aside>
            </div>
            @yield('container')

            <!-- footer -->
            <!-- <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://multinity.com/">Multinity</a>
                </div>
                <div class="footer-right"></div>
            </footer> -->


            <script src="dist/modules/jquery.min.js"></script>
            <script src="dist/modules/popper.js"></script>
            <script src="dist/modules/tooltip.js"></script>
            <script src="dist/modules/bootstrap/js/bootstrap.min.js"></script>
            <script src="dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
            <script src="dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
            <script src="dist/js/sa-functions.js"></script>

            <script src="dist/modules/chart.min.js"></script>
            <script src="dist/modules/summernote/summernote-lite.js"></script>

            <script>
                var ctx = document.getElementById("myChart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                        datasets: [{
                            label: 'Statistics',
                            data: [460, 458, 330, 502, 430, 610, 488],
                            borderWidth: 2,
                            backgroundColor: 'rgb(87,75,144)',
                            borderColor: 'rgb(87,75,144)',
                            borderWidth: 2.5,
                            pointBackgroundColor: '#ffffff',
                            pointRadius: 4
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 150
                                }
                            }],
                            xAxes: [{
                                gridLines: {
                                    display: false
                                }
                            }]
                        },
                    }
                });

                var ctx = document.getElementById("myChart2").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                        datasets: [{
                            label: 'Statistics',
                            data: [460, 458, 330, 502, 430, 610, 488],
                            borderWidth: 2,
                            backgroundColor: 'rgb(87,75,144)',
                            borderColor: 'rgb(87,75,144)',
                            borderWidth: 2.5,
                            pointBackgroundColor: '#ffffff',
                            pointRadius: 4
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    stepSize: 150
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    display: false
                                },
                                gridLines: {
                                    display: false
                                }
                            }]
                        },
                    }
                });
            </script>
            <script src="dist/js/scripts.js"></script>
            <script src="dist/js/custom.js"></script>
            <script src="dist/js/demo.js"></script>
            <script src="js/dropify.min.js"></script>
            <script src="js/ckeditor/ckeditor.js">
            </script>
            <script>
                var konten = document.getElementById("konten");
                CKEDITOR.replace(konten, {
                    language: 'en-gb'
                });
                CKEDITOR.config.allowedContent = true;
            </script>



            <!-- <script src="js/core/jquery.min.js"></script>
            <script src="js/core/popper.min.js"></script>
            <script src="js/core/bootstrap.min.js"></script>
            <script src="js/core/jquery.slimscroll.min.js"></script>
            <script src="js/core/jquery.scrollLock.min.js"></script>
            <script src="js/core/jquery.appear.min.js"></script>
            <script src="js/core/jquery.countTo.min.js"></script>
            <script src="js/core/js.cookie.min.js"></script>
            <script src="js/codebase.js"></script>
            <script src="js/dropify.min.js"></script>
            <script src="js/ckeditor.js"></script> -->

</body>

</html>