
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asset/css/login.css">
</head>
<body>
<div id="main">
	<div id="content-luar">
		<section class="login">
		<?php if($this->session->set_flashdata('not',true){
			echo $this->session->set_flashdata('not')};
			})?>
			<?=form_open('login/verifikasi')?>
				<input type="text" name="username" id="username" placeholder="Username" autofocus>
				<input type="password" name="password" id="password" placeholder="Password">
				<input type="submit" name="Submit" value="Submit" id="submit">
		</section>
		<?php if(validation_errors()) { ?>
					<div class="alert-block">
						<?php echo validation_errors(); ?>
					</div>
				<?php } ?>
			<?=form_close()?>
		</div>

</div>
<div id="footer">
    All Right Reserved by Faris	Copyright &copy 2015
</div>
</body>
</html>
