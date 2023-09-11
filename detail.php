<?php
require_once("../btwed/MODEL/conect.php");
include './header.php';
error_reporting(2);
$sql = " SELECT * FROM products WHERE id = " . $_GET['id'];
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo $sql;
    die('error');
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['image'] == null || $row['image'] == '') {
            $thum_Image = "";
        } else {
            $thum_Image = $row['image'];
        }

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <link rel="stylesheet" href="./css/css/bootstrap.min.css">
            <!-- customer js -->
            <script src='./js/wow.js'></script>
            <script type="text/javascript" src="./js/mylishop.js"></script>
            <!-- customer css -->
            <link rel="stylesheet" type="text/css" href="./css/css/animate.css">
            <link rel="stylesheet" type="text/css" href="./css/css/style.css">
        </head>


        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="detail-product col-sm-12 col-md-6">
                        <div class="row">
                            <div class="product-frame">
                                <img src="<?php echo $thum_Image; ?>" width="100%" height="450">
                            </div>
                        </div>
                    </div>
                    <!-- < hình ảnh -->
                    <div class="col-sm-12 col-md-6  col-xs-12">
                        <h2>
                            <?php echo $row['name']; ?>
                        </h2>
                        <hr>
                        <?php
                        if ($row['saleprice'] > 0) {
                            $gia = $row['price'] - ($row['price'] / 100);
                        ?>
                            <p class="price">giá cũ:
                                <?php echo $row['price']; ?><sup>đ</sup>
                            </p>
                            <p class="price">giá giảm còn:
                                <?php echo $gia; ?><sup>đ</sup>
                            </p>
                            <p class="description">Mô tả sản phẩm:
                                <?php echo $row['description']; ?><sup>.</sup>
                            </p>
                            <p class="quantity">Số lượng sản phẩm:
                                <?php echo $row['quantity']; ?><sup>sp</sup>
                            </p>
                        <?php
                        } else {
                        ?>
                            <p class="price">giá sản phẩm:
                                <?php echo $row['price']; ?><sup>đ</sup>
                            </p>
                            <p class="description">Mô tả sản phẩm:
                                <?php echo $row['description']; ?><sup>.</sup>
                            </p>
                            <p class="quantity">Số lượng sản phẩm:
                                <?php echo $row['quantity']; ?><sup>sp</sup>
                            </p>

                        <?php
                        }
                        ?>
                    </div>
                    

                </div>
                

            </div>
        </div>
        <footer>
            <div class="container">
                <?php include("../btwed/footer.php"); ?>
            </div>
        </footer>

        <script>
            new WOW().init();
        </script>
        <script type="text/javascript" src="https://forum.vietdesigner.net/data/codes/snowstorm.js"></script>

<?php
    }
}
?>