<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/MiniProject/';
//require $root.('/config.php');
require_once $root.'app/Views/Admin/layouts/header.php';
require_once $root.'app/Views/Admin/layouts/slidebar.php';


?>

<body class="">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">DashBoard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
<div class="content">
        <div class="row">
          <div class="col-md-12">
          <div class="d-sm-flex align-items-center justify-content-between ">
            <h1 class="h3 mb-0 text-gray-800"></h1>
          </div>          
          </div>
        </div>
      </div>

<!-- Page Heading -->

  <!-- cards -->
  <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-6 ml-auto">
            <div class="row  mb-5">
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                      <div class="text-right text-secondary">
                        <h5>Sales</h5>
                        <h3>$135,000</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Updated Now</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5>Expenses</h5>
                        <h3>$39,000</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Updated Now</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-users fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5>Users</h5>
                        <h3>15,000</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Updated Now</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-chart-line fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5>Visitors</h5>
                        <h3>45,000</h3>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <i class="fas fa-sync mr-3"></i>
                    <span>Updated Now</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of cards -->

    <!-- tables -->
    <section>
      <div class="container-fluid">
        <div class="row mb-5">
        <div class="col-xl-12 col-lg-12 col-md-6 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">Staff Salary</h3>
                <div class="table-responsive-sm">
                <table class="table table-striped bg-light text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Date</th>
                      <th>Contact</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>John</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Ann</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Mark</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>4</th>
                      <td>Mary</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td>Bob</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>

                <!-- pagination -->
                <nav>
                  <ul class="pagination justify-content-center mg-2">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- end of pagination -->

              </div>
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">Recent Payments</h3>
                <div class="table-responsive-sm">
                <table class="table table-dark table-hover text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>Monica</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><span class="badge badge-success w-100 py-2">Approved</span></td>
                    </tr>
                    <tr>
                      <th>2</th>
                      <td>Nick</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><span class="badge badge-success w-100 py-2">Approved</span></td>
                    </tr>
                    <tr>
                      <th>3</th>
                      <td>Alex</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><span class="badge badge-danger w-100 py-2">Pending</span></td>
                    </tr>
                    <tr>
                      <th>4</th>
                      <td>Jane</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><span class="badge badge-danger w-100 py-2">Pending</span></td>
                    </tr>
                    <tr>
                      <th>5</th>
                      <td>Michael</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><span class="badge badge-success w-100 py-2">Approved</span></td>
                    </tr>
                    <tr>
                      <th>6</th>
                      <td>Kate</td>
                      <td>$2000</td>
                      <td>25/05/2018</td>
                      <td><span class="badge badge-danger w-100 py-2">Pending</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
                 <!-- pagination -->
                 <nav>
                  <ul class="pagination justify-content-center mg-2">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>Previous</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- end of pagination -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of tables -->
   
    <!-- progress / task list -->
    <section>
      <div class="container-fluid">
        <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-6 ml-auto">
            <div class="row mb-4 align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <div class="bg-dark text-white p-4 rounded">
                  <h4 class="mb-5">Coversion Rates</h4>
                  <h6 class="mb-3">Google Chrome</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold" style="width: 91%">
                      91%
                    </div>
                  </div>
                  <h6 class="mb-3">Mozilla Firefox</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold bg-success" style="width: 82%">
                      82%
                    </div>
                  </div>
                  <h6 class="mb-3">Safari</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold bg-danger" style="width: 67%">
                      67%
                    </div>
                  </div>
                  <h6 class="mb-3">IE</h6>
                  <div class="progress mb-4" style="height: 20px">
                    <div class="progress-bar progress-bar-striped font-weight-bold bg-info" style="width: 10%">
                      10%
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-12 padding">
                <h4 class="text-muted p-3 mb-3 mg-tasksss">Tasks:</h4>
                <div class="container-fluid bg-white pad">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8 mg-l1">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white pad">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8 mg-l1">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white pad">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8 mg-l1">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white pad">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8 mg-l1">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
                <div class="container-fluid bg-white pad">
                  <div class="row py-3 mb-4 task-border align-items-center">
                    <div class="col-1">
                      <input type="checkbox" checked>
                    </div>
                    <div class="col-sm-9 col-8 mg-l1">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                    </div>
                    <div class="col-1">
                      <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of progress / task list -->

    <!-- activities / quick post -->
    <section>
      <div class="container-fluid">
        <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-6 ml-auto">
            <div class="row mb-5">
              <div class="col-xl-7 padding">
                <h4 class="text-muted mb-4 positive">Recent Customer Activities</h4>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header fz">
                      <button class="btn btn-block fz bg-secondary text-light text-left collapsed btn-css" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false">
                        <img src="img/data.jpg" width="50" class="mr-3 rounded">
                        John posted a new comment
                      </button>
                    </div>
                    <div class="collapse show" id="collapseOne" data-parent="#accordion">
                      <div class="card-body mob">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block fz bg-secondary text-light text-left btn-css" data-toggle="collapse" data-target="#collapseTwo">
                        <img src="img/data2.jpg" width="50" class="mr-3 rounded">
                        Mark posted a new comment
                      </button>
                    </div>
                    <div class="collapse" id="collapseTwo" data-parent="#accordion">
                      <div class="card-body mob">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block fz bg-secondary text-light text-left btn-css" data-toggle="collapse" data-target="#collapseThree">
                        <img src="https://image.viettimes.vn/666x374/Uploaded/2019/aobbflu/2017_12_04/iu_pjrq.jpg" width="50" class="mr-3 rounded">
                        Monica posted a new comment
                      </button>
                    </div>
                    <div class="collapse" id="collapseThree" data-parent="#accordion">
                      <div class="card-body mob">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block fz bg-secondary text-light text-left btn-css" data-toggle="collapse" data-target="#collapseFour">
                        <img src="https://0.soompi.io/wp-content/uploads/2018/03/08234059/Lee-Jong-Suk.jpg" width="50" class="mr-3 rounded">
                        Vivien posted a new comment
                      </button>
                    </div>
                    <div class="collapse" id="collapseFour" data-parent="#accordion">
                      <div class="card-body mob">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block fz bg-secondary text-light text-left btn-css" data-toggle="collapse" data-target="#collapseFive">
                        <img src="http://kenh14cdn.com/crop/640_360/2019/3/24/anh-2-1553440244536661182502-crop-1553441478267581472688.jpg" width="50" class="mr-3 rounded">
                        Nick posted a new comment
                      </button>
                    </div>
                    <div class="collapse" id="collapseFive" data-parent="#accordion">
                      <div class="card-body mob">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                      </div>                      
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <button class="btn btn-block fz bg-secondary text-light text-left btn-css" data-toggle="collapse" data-target="#collapseSix">
                        <img src="https://360kpop.net/wp-content/uploads/2017/01/lee-sung-kyung-toc-dep.jpg" width="50" class="mr-3 rounded">
                        Ann posted a new comment
                      </button>
                    </div>
                    <div class="collapse" id="collapseSix" data-parent="#accordion">
                      <div class="card-body mob">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                      </div>                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-5 mt-5">
                <div class="card rounded">
                  <div class="card-body">
                    <h5 class=" text-center mb-3">Quick Status Post</h5>
                    <ul class="list-inline text-center py-3">
                      <li class="list-inline-item mt-4">
                        <a href="#">
                          <i class="fas fa-pencil-alt text-success"></i>
                          <span class="h6 text-muted">Status</span>
                        </a>
                      </li>
                      <li class="list-inline-item mr-4">
                        <a href="#">
                          <i class="fas fa-camera text-info"></i>
                          <span class="h6 text-muted">Photo</span>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="fas fa-map-marker-alt text-primary"></i>
                          <span class="h6 text-muted">Check-in</span>
                        </a>
                      </li>
                    </ul>
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control py-2 mb-3" placeholder="What's Your Status...">
                        <button type="button" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 mb-5">Submit Post</button>
                      </div>
                    </form>
                    <div class="row">
                      <div class="col-6 time">
                        <div class="card bg-light">
                          <i class="far fa-calendar-alt fa-8x text-warning d-block m-auto py-3 py-5"></i>
                          <div class="card-body cb-2">
                            <p class="card-text text-center font-weight-bold text-uppercase">Mon,<span>may 26</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 time">
                        <div class="card bg-light">
                          <i class="far fa-clock fa-8x text-danger d-block m-auto py-3 py-5"></i>
                          <div class="card-body cb-2">
                            <p class="card-text text-center font-weight-bold text-uppercase">3:50 <span>am</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of activities / quick post -->

     
<?php require_once $root.'/app/Views/Admin/layouts/footer.php';
?>