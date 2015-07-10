<!DOCTYPE html>
<html>
<head>
  <title>E-Library</title>
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#EEEEEE">
  <nav style="border-radius:0px" class="navbar navbar-inverse" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">E-Library</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">

        <ul class="nav navbar-nav">

          <li><a href="<?php echo base_url()?>perpus/">Home </a></li>
          <li><a href="<?php echo base_url()?>kategori/">Kategori </a></li>
          <li><a href="<?php echo base_url()?>buku/">Data Buku </a></li>
          <li><a href="<?php echo base_url()?>password/">Password </a></li>
          <!-- <li><a class='dropdown-toggle' data-toggle='dropdown' href="#">Transaksi Barang <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a class='dropdown-toggle' href="<?php echo base_url()?>transaksi"><span class="glyphicon glyphicon-transfer"></span> Form Transaksi</a></li>
              <li><a class='dropdown-toggle' href="<?php echo base_url()?>transaksi/laporan  "><span class="glyphicon glyphicon-list-alt"></span> Laporan Transaksi</a></li>                
            </ul>
          </li>    -->

        </ul>
        <ul class="nav navbar-nav navbar-right">

         <li><a href="<?php echo base_url()?>welcome/logout">Logout</a></li>             
       </ul>
     </div>
   </div>
 </nav>
 <div class="row"></div>
 <div class="container" style="background:#fff;padding:40px;margin-top:-15px;border-radius:8px;box-shadow:0px 0px 10px 0px #ccc;">


  <div id="contents">
    <?= $contents ?>
  </div>


</div>

<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>