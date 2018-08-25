<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>de11</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form  method="POST" role="form" name="form" >
			<div>
				Form dang ky
			</div>
			<div>
				<label>Ten</label>
				<input  id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" type="text" name="name">
			</div>
			<div>
				<label>Mat khau</label>
				<input  id="password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>" type="password" name="password">
			</div>
			<div>
				<label>Lua chon</label><br>

					<input type="radio" value="dangnhap" name="radio">Dang nhap<br>
					<input type="radio" value="dangky" name="radio">dang ky
	
			</div>
				<input onclick="reset_form()" value="Nhap lai" type="button"></input>
				<input name="submit" type="submit" value="Dang nhap/ky">
				
		</form>
		<script language="JavaScript" type="text/javascript">

		function reset_form()
		{
			
			window.document.form.reset();
			
		}
		</script>
	</body>
</html>
<?php
	if(isset($_POST['submit'])) {
		if($_POST['name']=="" || $_POST['password']=="") {
			echo "<p>cac truong khong dc trong</p>";
			return;
		}
		if(isset($_POST['radio']) ) {
			if($_POST['radio']=='dangky' ) {
				echo "ten: " . $_POST['name'] . "<br>";	
				echo "pass: " . $_POST['password'];	
			} else if($_POST['radio']=='dangnhap') {
				if($_POST['name']=='admin' && $_POST['password']=='admin') {
					echo "dang nhap thanh cong!";
				} else {
					echo "dang nhap that bai!@";
				}
			}
		} else {
			echo "ban chua chon lua chon";
		}
	}
?>
