<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <!-- this for navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
		<a class="navbar-brand" href="javascript:void(0)">UAD</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('nama')?></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a href="<?php echo site_url('login/logout')?>" class="btn btn-success my-2 my-sm-0" type="button">Logout</a>
			</form>
		</div>
	</nav>
	<!-- this for nvbar -->

<div class="container">
  <h2><?php echo $judul ?></h2>
 
  <table class="table">
             
  <table class="table table-bordered">
    <thead>
      <tr>
      <tr class="table-primary">
        <th>Nama</th>
        <th>tanda_pengenal</th>
        <th>no_tandapengenal</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
   
    
        <?php foreach($data_pengguna as $data):?>
        
      <tr>
      <tr class="table-danger">
      <td> <p class="bg-danger text-white"><?php echo $data->Nama?></td>
      <td><p class="bg-danger text-white"><?php echo $data->tanda_pengenal?></td>
      <td><p class="bg-danger text-white"><?php echo $data->no_tandapengenal?></td>
        <td><p class="bg-danger text-white"><?php echo $data->email?></td>
      </tr>     

    
      <?php endforeach?> 
    </tbody>
  </table>
</div>

</body>
</html>