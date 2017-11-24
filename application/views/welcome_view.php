<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Codeigniter Sign In With Facebook</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?=site_url('assets/css/bootstrap.css')?>" rel="stylesheet">		
	<link href="<?=base_url('assets/css/bootstrap-responsive.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/font-awesome.css')?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/welcome_style.css');?>">
</head>
<body>
<div class="container">
	<fieldset>
	<div class="navbar">
		<div class="navbar-inner">
			<a class="brand" href="#">Aplikasiku</a>
			<a href="<?php echo site_url('welcome/logout');?>" role="button" class="	btn btn-danger pull-right" onclick="return confirm('Apakah Anda ingin logout?')" ><i class="icon-off icon-white"></i> Sign Out</a>
				<? if ((isset($page)) and ($page == 'home')) { ?>
					<ul class="nav">
					  	<li><a href="<?=base_url('welcome/home');?>"><i class="icon-home"></i> Home</a></li>
					  	<li><a href="<?=base_url('welcome');?>"><i class="icon-plus-sign"></i>Biodata</a></li>
					</ul>
						<img src="<?=base_url('assets/img/ad.jpg');?>" class="img-rounded"/>
						<center><h1>Selamat datang</h1><br/><br/></center>
				<?			
				} else { 
				?>	
					</div>
				  		</div>	
						<form action="<?php echo base_url(). 'welcome/proses_simpan'; ?>" method="post">
						    <input type="hidden" name="nama" value="<?=$user_profile['name']; ?>">
							<table>
								<tr><td>Nama </td><td>: <input type="text" name="nama" value="<?=$user_profile['name']; ?>" disabled/></td> </tr>
								<tr><td>First Name </td><td>: <input type="text" name="first" value="<?=$user_profile['first_name']; ?>"/></td> </tr>
								<tr><td>Last Name </td><td>: <input type="text" name="last" value="<?=$user_profile['last_name']; ?>"/></td> </tr>
								<tr><td>Gender </td><td>: <input type="text" name="gender" value="<?=$user_profile['gender']; ?>"/></td> </tr>
								<tr><td>Alamat </td><td>: <input type="text" name="alamat" value="<?=$user_profile['location']->name; ?>"/> </td> </tr>
								<tr><td><button type="submit" name="ubah" class="btn btn-primary"><i class="icon-ok icon-white"></i> Simpan</button></td> 	
								</tr>
							</table>
						</form>	
				<?  
				} 
				unset($page);	
				?>
	</fieldset>
</div>
<script src="<?=site_url('assets/js/jquery.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.js')?>"></script>
<script src="<?=base_url('assets/js/tooltip.js')?>"></script>
</body>
</html>