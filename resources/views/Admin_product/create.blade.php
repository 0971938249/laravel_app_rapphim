<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
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
                            <a class="nav-link" href="{{ route('phim.index') }}">
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
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add-Phim</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add-Phim</li>
                        </ol>
                        <div class="container-fluid">
                   
                            <form  method="POST" action="{{ route("admin.insert_phim") }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label class="form-label">Tên phim</label>
                                  <input type="text" class="form-control" name="tenphim" placeholder="Nhập tên phim" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Thể loại</label>
                                    <input type="text" class="form-control" name="theloai" placeholder="Nhập thể loại" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Đạo diễn</label>
                                    <input type="text" class="form-control" name="daodien" placeholder="Nhập tên đạo diễn" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Diễn viên chính</label>
                                    <input type="text" class="form-control" name="dienvienchinh" placeholder="Nhập tên diễn viên chính" required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Ngày phát hành</label>
                                    <input type="datetime-local" class="form-control" name="ngayphathanh"  required>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Thời lượng</label>
                                    <input type="number" class="form-control" name="thoiluong" placeholder="Nhập thời lượng phim" required>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Mô tả</label>
                                  <textarea class="form-control" name="mota" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                                </div>
                                
                                <div class="mb-3">
                                  <label  class="form-label">Ảnh phim</label>
                                  <input type="file" class="form-control" name="anhphim" accept="image/*">
                                </div>
                                <p>
                                    @if($errors->has('video'))
                                        {{ $errors->first('video') }}
                                    @endif
                                </p>
                                <div class="mb-3">
                                    <label  class="form-label">video trailer phim</label>
                                    <input type="file" class="form-control" name="video" accept="video/*">
                                  </div>
                            
                                <div class="mb-3">
                                    <label  class="form-label">Trạng thái phim</label>
                                    <input type="text" class="form-control" name="trangthaiphim" placeholder="Nhập trạng thái phim" required>
                                </div>
                        
                                <button type="submit" class="btn btn-primary">Thêm phim</button>
                              </form>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets2')}}/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets2')}}/js/datatables-simple-demo.js"></script>
    </body>
</html>