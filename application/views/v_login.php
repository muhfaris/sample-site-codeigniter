
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
	<link rel="stylesheet" type="text/css" href="/asset/css/login.css">
	<style type="text/css">.pesanlog {
    color: red;width: 100%;text-align: center;font-size: 30px;}
</style>
</head>
<body>
<div id="main">
	<div id="content-luar">
		<section class="login">
			<?=form_open('login/verifikasi')?>
				<input type="text" autocomplete="off" name="username" value="" id="username" placeholder="Username" autofocus>
				<input type="password" autocomplete="off" name="password" value="" id="password" placeholder="Password">
				<input type="submit" name="Submit" value="Submit" id="submit">
		</section>
		<?php if(validation_errors()) { ?>
					<div class="alert-block">
						<?php echo validation_errors(); ?>

					</div>
			<?php } ?>
			<?=form_close()?>
		</div>
		<div class="pesanlog">
			<?php if($this->session->flashdata('not')){
			echo $this->session->flashdata('not');
			};?>
			</div>
</div>
<div id="footer">
    All Right Reserved by Faris	Copyright &copy 2015
</div>
</body>
</html>
