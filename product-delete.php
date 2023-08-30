<meta charset="utf-8">
	<?php
	    include './header.php';
	    require_once('../btwed/MODEL/conect.php');
	    error_reporting(2);
	
	    if (isset($_GET['notimage'])) {
	        $notimage = 'Vui lòng chọn hình ảnh hợp lệ!';
	    } else {
	        $notimage = '';
	    }
	?>

<form action="product-delete.php">
<input type="hidden" name="idproduct" value="<?php echo $product['idproduct']; ?>">
<td><input type="submit" name="btn_delete" class="btn btn-danger" value="Delete"/></td>
</form>
...
<?php

if(isset($_POST['idproduct'])){
 $delete_id = $_POST['idproduct'];

 echo $delete_id;
 }

 ?>