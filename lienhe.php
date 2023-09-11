<?php require_once('../btwed/MODEL/conect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>MyLiShop Fashion</title>
    <link rel="icon" type="image/png" href="../images/logohong.png">
    <meta name="viewport" content = "width=device-width, initial-scale =1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My đẹp trai">
    <meta name="author" content="Hoi My handsome">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src=".."></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <!-- Javascript Custom -->
    <script src="../js/mylishop.js" type="text/javascript" charset="utf-8" async defer></script>
    <!-- Bootstrap Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/css/lienhe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<Header >
     <?php include("./header.php"); ?> 
    </header >
<div>


    <div class="row">
        <div class=" col-sm-12 col-md-8">


            <h3 class="title">ĐỂ LẠI LỜI NHẮN!</h3>
            <br>

            <form class="form">
    
    <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>first name</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>last name</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>email</span>
    </label> 
        
    <label>
        <input class="input" placeholder="" type="tel" required="">
        <span>contact number</span>
    </label>
    <label>
        <textarea class="input01" placeholder="" rows="3" required=""></textarea>
        <span>message</span>
    </label>
    
    <button href="#" class="fancy">
      <span class="top-key"></span>
      <span class="text">submit</span>
      <span class="bottom-key-1"></span>
      <span class="bottom-key-2"></span>
    </button>
</form>
        </div>

        <div class="col-sm-12 col-md-4">
            <h3 class="title">THÔNG TIN LIÊN HỆ</h3>
            <ul class="">
                <li class="wow rotateInUpLeft" style="visibility: visible;"><span>Trụ sở:</span> 99 Tô Hiến Thành, Sơn Trà, Đà Nẵng</li>
                <li class="wow rotateInUpLeft" style="visibility: visible;"><span>Email:</span> hoihmy2712@gmail.com</li>
                <li class="wow rotateInUpLeft" style="visibility: visible;"><span>Website:</span> <a href="https://www.mylishop.com.vn">MyLiShop.com.vn</a></li>
                <li class="wow rotateInUpLeft" style="visibility: visible;"><span>Facebook:</span> MyLiShop</li>
                <li class="wow rotateInUpLeft" style="visibility: visible;"><span>Hỗ trợ:</span> 0397.450.200</li>
                <li class="wow rotateInUpLeft" style="visibility: visible;"><span>Đặt hàng:</span> 0522.980.270</li>
            </ul>
            <br>
            <div class="social">
                <ul>
                    <li><a target="_blank" href="@"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="@"><i class="fa fa-pinterest"></i></a></li>
                    <li><a target="_blank" href="@"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a target="_blank" href="@"><i class="fa fa-behance"></i></a></li>
                    <li><a target="_blank" href="@"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<footer>
     <div class="container">
        <?php include("../btwed/footer.php"); ?>
    </div> 
    </footer>
</body>
</html>