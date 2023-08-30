
<?php
session_start();
session_unset();
session_destroy();
header('location:./index.php');
exit('Bạn đã đăng suất thành công!');
?>