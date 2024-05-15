<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('assets2')}}/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('admin.index')}}">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('admin.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
            
                            <!--</div>-->
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="{{route('banner.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Banner
                            </a>
                            <a class="nav-link" href="{{route('phongchieu.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Phòng chiếu
                            </a>
                            <a class="nav-link" href="{{route('ghe.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Ghế
                            </a>
                            <a class="nav-link" href="{{route('phim.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Phims
                            </a>
                            <a class="nav-link" href="{{route('suatchieu.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Suất chiếu
                            </a>
                            <a class="nav-link" href="{{route('feedback.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Feedbacks
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <div>
                    <div style="display: flex ; margin:  0 60px">
                        <div style="flex :1 "><img  style="width: 100%; height: 100%;" src="{{ asset('image_phims/'.$phim->hinhanh) }}" alt=""></div>
                        <div style=" flex: 1 ; margin: 20% 15%">
                            <div style="font-size: 28px ; font-weight: bold ; margin-bottom: 20px">TÊN PHIM :{{ $phim->tenphim }}</div>
                            <div style="font-size: 24px ;margin-bottom: 20px ">MÃ HÓA ĐƠN : {{ $hoadon[0]->id }}</div>
                            <div style="display: flex ; align-items: center; justify-content: space-between ; margin-bottom: 20px">
                                
                                <div class = "col">
                                    <div style="font-size: 18px ; ">
                                        PHÒNG CHIẾU :
                                    </div>
                                    <div style="font-size: 18px ; "> {{ $phongchieu->tenphong }}</div>
                                </div>
                               
                                <div class ="col">
                                    <div style="font-size: 18px ; ">
                                        THỜI GIAN
                                    </div>
                                    <div style="font-size: 18px ; ">
                                        @php
                                        // Kiểm tra nếu $ngaychieu là một chuỗi thì chuyển đổi thành đối tượng DateTime
                                        if (is_string($ngaychieu)) {
                                            $ngaychieu = new DateTime($ngaychieu);
                                        }
                                
                                        // Kiểm tra nếu $ngaychieu là một đối tượng DateTime trước khi sử dụng phương thức format()
                                        if ($ngaychieu instanceof DateTime) {
                                            $gio = $ngaychieu->format('H');
                                            $phut = $ngaychieu->format('i');
                                            $ngay = $ngaychieu->format('d');
                                            $thang = $ngaychieu->format('m');
                                            $nam = $ngaychieu->format('Y');
                                        } else {
                                            // Xử lý nếu $ngaychieu không phải là đối tượng DateTime
                                            $gio = $phut = $ngay = $thang = $nam = 'N/A';
                                        }
                                    @endphp
                                
                                    {{ $gio }}:{{ $phut }},  {{ $ngay }}/  {{ $thang }} / {{ $nam }}
                                    </div>
                                </div>
                               
                            </div>
                            <div style="display: flex ; align-items: center;justify-content: space-between;margin-bottom: 20px">
                                
                                <div class="col">
                                    <div style="font-size: 18px ; ">
                                        SỐ LƯỢNG VÉ :
                                    </div>
                                    <div>
                                        {{ $hoadon[0]->soluongvedamua }}
                                    </div>
                                </div>
                                
                                <div class ="col">
                                    <div style="font-size: 18px ; ">

                                        GHẾ ĐÃ CHỌN :
                                    </div>
                                    <div style="font-size: 18px ; ">

                                        <?php
                                        $html = '';
                                        foreach($chongoi as $ghe) {
                                            $tenGhe = $ghe->ghevatly->tenghe;
                                            $html .= $tenGhe . ', ';
                                        }
    
                                        // Loại bỏ dấu phẩy cuối cùng nếu có
                                        $html = rtrim($html, ', ');
                                         ?>
                                       {{ $html}}
                                    </div>
                                </div>
                               
                                
                            </div>
                            <a href="{{ route('admin.index') }}" class="btn btn-secondary">TRỞ LẠI</a>
                        </div>
                        
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets2')}}/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets2')}}/demo/chart-area-demo.js"></script>
        <script src="{{asset('assets2')}}/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets2')}}/js/datatables-simple-demo.js"></script>
    </body>
</html>
