
<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/MiniProject/';
//require $root.('/config.php');
require_once $root.'app/Views/Admin/layouts/header.php';
require_once $root.'app/Views/Admin/layouts/slidebar.php';
?>
<body class="" style="background-color: #f4f3ef; height:100vh;">
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
            <a class="navbar-brand" href="javascript:;">Products</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a href="<?=$path.'/product/create'?>" class=" ">
                    <button class="btn btn-primary text-decoration-none text-white text-uppercase">add new</button>
                </a>

            </div>
        </div>
    </div>
    <div class="row text-center">
        <table class="table table-hover ">
            <thead>
            <tr>
                <th>ID</th>
                <th>CategoryID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <tbody>
            <?php  foreach($listProduct as $key =>$product){ ?>
                <tr>
                    <td><?=$product->bookID?></td>
                    <td><?=$product->categoryID?> </td>
                    <td><?=$product->bookName?></td>
                    <td><?=$product->description?></td>
                    <td>
                        <div>
                            <a href="<?=$path?>/product/edit?bookID=<?=$product->bookID ?>" > <button class="btn btn-success text-white" method="GET">
                                   Edit</button></a>
                            <button class="btn btn-danger text-white" onclick="confirm ('Do you want delete it?')?$('#form-delete-<?=$product->bookID?>').submit():''">Delete</button>
                            <form action="<?=$path?>/product/delete?bookID=<?=$product->bookID ?> " method="POST" id="form-delete-<?=$product->bookID?>" method="post" ></form>

                        </div>
                    </td>
                </tr>
            <?php }?>

            </tbody>
            </thead>
        </table>
    </div>
</div>
<!-- content row -->

<?php require_once $root.'/app/Views/Admin/layouts/footer.php';?>

