<?php
require_once("../btwed/MODEL/conect.php");
include './header.php';
error_reporting(2);
$sql= " SELECT * FROM products WHERE id = " . $_GET['id'];
$result = mysqli_query($conn,$sql);
if(!$result){
    echo $sql;
    die('error');
}
else{
    while($row = mysqli_fetch_assoc($result))
    {
    if($row['image'] == null || $row['image'] == ''){
        $thum_Image = "";
    } else{
        $thum_Image = $row['image'];
    }

?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="detail-product">
                <div class="row">
                    <div class="product-frame">
                        <img src="<?php echo $thum_Image; ?>" width="100%" height="450">
                    </div>
                </div>
            </div>
            <!-- < hình ảnh -->
            <div class="col-md-7 col-xs-6 col-xs-12">
                <h2>
                    <?php echo $row['name'];?>
                </h2>
                <hr>
                <?php
                if($row['saleprice']>0)
                {
                    $gia = $row['price'] - ($row['price']/100);
            ?>
                <p class="price">gia cu:
                    <?php echo $row['price']; ?><sup>d</sup>
                </p>
                <p class="price">gia giam con:
                    <?php echo $gia; ?><sup>d</sup>
                </p>
                <?php
                }else
                {
            ?>
                <p class="price">gia san pham:
                    <?php echo $row['price']; ?><sup>d</sup>
                </p>
                <?php 
        }
        ?>
            </div>
        </div>
    </div>
</div>
    
   <?php 
    } 
   }
?>