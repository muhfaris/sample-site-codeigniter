<!-- bagian header -->
<!DOCTYPE HTML>
<html>
<head>
<title>DASBOARD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

 <!-- CSS script -->
<link href="<?php echo base_url()?>asset/css/boostrap.mini.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>asset/css/home.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>asset/css/font-awesome.css" rel="stylesheet"> 
<link href="<?php echo base_url()?>asset/css/mobile.css" rel="stylesheet">
<!-- CSS Add Post -->
<style type='text/css'>
.but_oper {
    padding: 2px 15px;
}
#content {
    margin: 0px;
    padding: 15px;
}
#judul{
	width:100%;
	padding: 5px;
}
#mceu_22{
	margin-top: 5px;
	margin-bottom: 10px;
}
form {
    margin-top: 15px;
    padding: 10px;
}
.tombol {
    display: block;
    margin-top: 15px;
}
.error {
    color: red;
    text-align: center;
    font-weight: bold;
}
</style>
<!-- End CSS Add Post -->
<!-- Jquery script -->
<script src="<?php echo base_url()?>asset/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

<script src="<?php echo base_url()?>asset/js/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>asset/js/custom.js"></script>
<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>

<!-- Menambahkan file manager Codeigniter -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>asset/css/jquery-ui.css" />
<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery-ui.min.js"></script>
 
 <!-- Tiny MC Editor-->
 <script type="text/javascript" src="<?php echo base_url();?>/asset/plugin/tinymce/js/tinymce/tinymce.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>/asset/plugin/tinymce/js/tinymce/plugin/table/plugin.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>/asset/plugin/tinymce/js/tinymce/plugin/spellchecker/plugin.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>/asset/plugin/tinymce/js/tinymce/plugin/paste/plugin.min.js"></script>
	 <script type="text/javascript">
		  tinymce.init({
		    selector: 'textarea',
		    theme: 'modern',
		    plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern"
			],
			external_plugins: {
			//"moxiemanager”: "/moxiemanager-php/plugin.js"
			},
			content_css: "css/development.css",
			add_unload_trigger: false,
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",
			image_advtab: true
		  });
  </script>
</head>
<body>

<!-- end header -->
