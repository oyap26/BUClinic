<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome stallar dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="../../images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../index.html">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">UI Elements</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/icons/simple-line-icons.html">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/forms/basic_elements.html">
                <span class="menu-title">Form Elements</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/charts/chartist.html">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item pro-upgrade">
              <span class="nav-link">
                <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2> Inventory <i class="icon-social-dropbox float-left"></i></h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Medicine Inventory</h4>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="font-weight-bold">Generic Name</th>
                          <th class="font-weight-bold">Quantity</th>
                          <th class="font-weight-bold">Expiration Date</th>
                          <th class="font-weight-bold">Last Stock Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="icon-arrow-down-circle"></i></td>
                          <td><label class="badge badge-danger">Pending</label></td>
                          <td><div class="btn-group">
                              <button type="button" class="btn btn-dark btn-sm" data-toggle="dropdown"><i class="icon-menu"></i></button>
                              <div class="dropdown-menu">
                                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#re-stockmodal">Re-Stock<i class="icon-plus float-left"></i></button><br>
                                <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#editmodal">Edit<i class="icon-pencil float-left"></i></button><br>
                                <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#deletemodal">Delete<i class="icon-trash float-left"></i></button>
                              </div>
                            </div></td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-danger"> 21.06% <i class="icon-arrow-down-circle"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                          <td><div class="btn-group">
                              <button type="button" class="btn btn-dark btn-sm" data-toggle="dropdown"><i class="icon-menu"></i></button>
                              <div class="dropdown-menu">
                                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#re-stockmodal">Re-Stock<i class="icon-plus float-left"></i></button><br>
                                <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#editmodal">Edit<i class="icon-pencil float-left"></i></button><br>
                                <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#deletemodal">Delete<i class="icon-trash float-left"></i></button>
                              </div>
                            </div></td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-danger"> 35.00% <i class="icon-arrow-down-circle"></i></td>
                          <td><label class="badge badge-info">Fixed</label></td>
                          <td><div class="btn-group">
                              <button type="button" class="btn btn-dark btn-sm" data-toggle="dropdown"><i class="icon-menu"></i></button>
                              <div class="dropdown-menu">
                                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#re-stockmodal">Re-Stock<i class="icon-plus float-left"></i></button><br>
                                <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#editmodal">Edit<i class="icon-pencil float-left"></i></button><br>
                                <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#deletemodal">Delete<i class="icon-trash float-left"></i></button>
                              </div>
                            </div></td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>1<br>2</td>
                          <td class="text-success"> 82.00%<br>82.00% <i class="icon-arrow-up-circle"></i></td>
                          <td><label class="badge badge-success">Completed</label></td>
                          <td><div class="btn-group">
                              <button type="button" class="btn btn-dark btn-sm" data-toggle="dropdown"><i class="icon-menu"></i></button>
                              <div class="dropdown-menu">
                                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#re-stockmodal">Re-Stock<i class="icon-plus float-left"></i></button><br>
                                <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#editmodal">Edit<i class="icon-pencil float-left"></i></button><br>
                                <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#deletemodal">Delete<i class="icon-trash float-left"></i></button>
                              </div>
                            </div></td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-success"> 98.05% <i class="icon-arrow-up-circle"></i></td>
                          <td><label class="badge badge-warning">In progress</label></td>
                          <td><div class="btn-group">
                              <button type="button" class="btn btn-dark btn-sm" data-toggle="dropdown"><i class="icon-menu"></i></button>
                              <div class="dropdown-menu">
                                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#re-stockmodal">Re-Stock<i class="icon-plus float-left"></i></button><br>
                                <button type="button" class="btn btn-warning w-100" data-toggle="modal" data-target="#editmodal">Edit<i class="icon-pencil float-left"></i></button><br>
                                <button type="button" class="btn btn-danger w-100" data-toggle="modal" data-target="#deletemodal">Delete<i class="icon-trash float-left"></i></button>
                              </div>
                            </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>

<!-- Modal -->
<div class="modal fade" id="re-stockmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Re-Stock Item <i class="icon-plus float-left"></i></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text" class="form-control" id="M_GName" placeholder="Generic Name" disabled>
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="number" class="form-control" id="M_Quantity" placeholder="Quantity">
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text"g class="form-control mb-2" id="M_EDate" placeholder="Expiration Date" onfocus="this.type='date'">
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text"g class="form-control mb-2" id="M_LSDate" placeholder="Last Stock Date" onfocus="this.type='date'" disabled>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Edit Item <i class="icon-pencil float-left"></i></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text" class="form-control" id="M_GName" placeholder="Generic Name">
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="number" class="form-control" id="M_Quantity" placeholder="Quantity">
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text"g class="form-control mb-2" id="M_EDate" placeholder="Expiration Date" onfocus="this.type='date'">
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text"g class="form-control mb-2" id="M_LSDate" placeholder="Last Stock Date" onfocus="this.type='date'" disabled>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Delete Item <i class="icon-trash float-left"></i></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text" class="form-control" id="M_GName" placeholder="Generic Name" disabled>
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="number" class="form-control" id="M_Quantity" placeholder="Quantity" disabled>
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text"g class="form-control mb-2" id="M_EDate" placeholder="Expiration Date" onfocus="this.type='date'" disabled>
        </div>
        <div class="col-md-12 col-sm-12 mb-2">
            <input type="text"g class="form-control mb-2" id="M_LSDate" placeholder="Last Stock  Date" onfocus="this.type='date'" disabled>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="save">Delete</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>