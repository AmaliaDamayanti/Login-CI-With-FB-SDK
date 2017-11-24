<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Codeigniter Sign In With Facebook</title>

	<style type="text/css">
	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div id="container">
	<h1>Biodata</h1>
		<? if ((isset($page)) and ($page == 'biodata')) { ?>
			<div class="navbar">
		  		<div class="navbar-inner">
					<a class="brand" href="#">Biodata</a>
					<ul class="nav">
					  <li><a href="<?=base_url('v_profile');?>"><i class="icon-home "></i> Home</a></li>
					</ul>
				</div>
		  	</div>

					<form action="<?php echo base_url(). 'profile/proses_simpan'; ?>" method="post">
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
						<p><a href="<?php echo site_url('welcome/logout');?>">Sign Out</a></p>
					</form>

		<?			
		} else { 
		?>	
			<div class="navbar">
		  		<div class="navbar-inner">
					<a class="brand" href="#">My Note</a>
					<ul class="nav">
					  <li><a href="<?=base_url('profile');?>"><i class="icon-home"></i> Home</a></li>
					  <li><a href="<?=base_url('profile/biodata');?>"><i class="icon-plus-sign"></i>Biodata</a></li>
					</ul>
						<p><a href="<?php echo site_url('profile/logout');?>">Sign Out</a></p>
					</div>
		  		</div>

			<!--<legend>Home</legend>-->
			<center><h1>Selamat datang <?=$this->session->userdata('nama')?> </h1><br/><br/></center>
				
		<?  
		} 
			unset($page);

			
		?>
</div>

</body>
</html>