<?php
require_once('../btwed/MODEL/conect.php');
$prd = 0;
if (isset($_SESSION['cart'])) {
    $prd = count($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fashion MyLiShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="description" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="keywords" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="author" content="Hôih My" />
    <meta name="author" content="Y Blir" />
    <link rel="icon" type="image/png" href="images/logohong.png">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/css/bootstrap.min.css">	
    <!-- customer js -->
    <script src='./js/wow.js'></script>
    <script type="text/javascript" src="./js/mylishop.js"></script>
    <!-- customer css -->
    <link rel="stylesheet" type="text/css" href="./css/css/animate.css">
    <link rel="stylesheet" type="text/css" href="./css/css/style.css">

</head>

<body>
    <!-- button top -->
    <a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
    
    <Header >
     <?php include("./header.php"); ?> 
    </header >

    <!-- background -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $sql = "SELECT image FROM slides WHERE status=1";
            $result = mysqli_query($conn, $sql);
            $slide2 = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($slide2 == 1) { ?>
                    <div class="carousel-item active">
                        <img class="d-block banner" src="<?php echo $row['image']; ?>" alt="...">
                    </div>
                <?php $slide2++;
                } else { ?>
                    <div class="carousel-item">
                        <img class="d-block banner" src="<?php echo $row['image']; ?>" alt="...">
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   
    <!-- /background -->

    

    <div class="main">
        <!-- slide -->
        <!-- <?php include("model/slide.php"); ?> -->
        <!-- class="clearfix" -->

        <!-- <Banner>
        <?php include("model/banner.php"); ?>
        </banner> -->




        
        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="product-main">

                        <!-- sản phẩm mới -->
                        <div class="title-product-main">
                            <h3 class="section-title">Sản phẩm mới</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row">
                            <?php
                                $sql = "SELECT id,image,name,price FROM products WHERE category_id=3 LIMIT 8";
                                $result = mysqli_query($conn, $sql);

                                while ($kq = mysqli_fetch_assoc($result)) {

                                ?>
                                    <div class="col-md-3 col-sm-6 text-center">
                                        <div class="thumbnail">
                                            <div class="hoverimage1">
                                                <img src="<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                            </div>
                                            <div class="name-product">
                                                <?php echo $kq['name']; ?>
                                            </div>
                                            <div class="price">
                                                Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                            </div>
                                            <div class="product-info">
                                                <!-- gán nút giỏ hàng -->
                                                <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        <label style="color: red;">&hearts;</label> Mua hàng <label style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                                <!-- //kích vô nút chi tiết vào trang chi tiết // -->
                                                <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                            </div><!-- /product-info -->
                                        </div><!-- /thumbnail -->
                                    </div><!-- /col -->
                                <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /sản phẩm mới -->

                        <!-- Thời Trang Nam -->
                        <div class="title-product-main">
                            <h3 class="section-title">Thời Trang Nam</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                $sql = "SELECT id,image,name,price FROM products WHERE category_id=1 LIMIT 8";
                                $result = mysqli_query($conn, $sql);

                                while ($kq = mysqli_fetch_assoc($result)) {

                                ?>
                                    <div class="col-md-3 col-sm-6 text-center">
                                        <div class="thumbnail">
                                            <div class="hoverimage1">
                                                <img src="<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                            </div>
                                            <div class="name-product">
                                                <?php echo $kq['name']; ?>
                                            </div>
                                            <div class="price">
                                                Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                            </div>
                                            <div class="product-info">
                                                <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        <label style="color: red;">&hearts;</label> Mua hàng <label style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                                <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                            </div><!-- /product-info -->
                                        </div><!-- /thumbnail -->
                                    </div><!-- /col -->
                                <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nam -->

                        <!-- Thời Trang Nữ -->
                        <div class="title-product-main">
                            <h3 class="section-title">Thời Trang Nữ</h3>
                        </div>
                        <div class="content-product-main">
                            <div class="row">
                                <?php
                                $sql = "SELECT id,image,name,price FROM products WHERE category_id=2 LIMIT 8";
                                $result = mysqli_query($conn, $sql);

                                while ($kq = mysqli_fetch_assoc($result)) {

                                ?>
                                    <div class="col-md-3 col-sm-6 text-center">
                                        <div class="thumbnail">
                                            <div class="hoverimage1">
                                                <img src="<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                                            </div>
                                            <div class="name-product">
                                                <?php echo $kq['name']; ?>
                                            </div>
                                            <div class="price">
                                                Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                                            </div>
                                            <div class="product-info">
                                                <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        <label style="color: red;">&hearts;</label> Mua hàng <label style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                                <a href="detail.php?id=<?php echo $kq['id']; ?>">
                                                    <button type="button" class="btn btn-primary">
                                                        <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                                    </button>
                                                </a>
                                            </div><!-- /product-info -->
                                        </div><!-- /thumbnail -->
                                    </div><!-- /col -->
                                <?php } ?>
                            </div><!-- /row -->
                        </div><!-- /Thời Trang Nữ -->

                    </div> <!-- /product-main -->
                </div> <!-- /col -->

            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- /main -->

    <!-- partner -->
    <!-- <div class="container">
        <div class="title-product-main">
            <h3 class="section-title">Hãng Thời Trang Nổi Tiếng</h3>
        </div>
        <?php include("model/partner.php"); ?>
    </div> -->
    <!-- /partner -->

    <footer>
     <div class="container">
        <?php include("../btwed/footer.php"); ?>
    </div> 
    </footer>

    <style>
        .banner {
            width: 100%;
            height: 400px;
            object-fit: fill;
        }
    </style>

    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="https://forum.vietdesigner.net/data/codes/snowstorm.js"></script>
 
</body>

</html>