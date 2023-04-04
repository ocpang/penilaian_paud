<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">

    <title>Halaman Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url(); ?>assets/js/jquery-3.6.4.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/js/administrator.js"></script>

    <!-- dataTables	-->
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/jquery.dataTables.min.css" /> 
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/js/jquery.dataTables.js"></script>

	<script type="text/javascript" charset="utf-8">
	function angka(e) {
	   if (!/^[0-9]+$/.test(e.value)) {
		  e.value = e.value.substring(0,e.value.length-1);
	   }
	}
	</script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">PAUD Flamboyan 1</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              	<?php   
				   	if(!empty($this->session->userdata('aid')) && !empty($this->session->userdata('anama')) && !empty($this->session->userdata('ausername')) && !empty($this->session->userdata('apassword')) && !empty($this->session->userdata('astatus')))
					{
				?>
	                <ul class="nav navbar-nav">
						<li <?php if($this->uri->segment(1) == "aberanda") echo "class='active'"; ?> >
							<a href="<?php echo base_url(); ?>aberanda">Beranda</a>
						</li>
						<li <?php if($this->uri->segment(1) == "admin") echo "class='active'"; ?> >
							<a href="<?php echo base_url(); ?>admin">Admin</a>
						</li>
						<li <?php if($this->uri->segment(1) == "aanakdidik") echo "class='active'"; ?> >
							<a href="<?php echo base_url(); ?>aanakdidik">Anak Didik</a>
						</li>
						<li class="dropdown <?php if($this->uri->segment(1) == "anilaiagama" || $this->uri->segment(1) == "anilaibahasa" || $this->uri->segment(1) == "anilaifisik" || $this->uri->segment(1) == "anilaikonsep" || $this->uri->segment(1) == "anilaipengetahuan" || $this->uri->segment(1) == "anilaisosial") echo "active"; ?>" >
                          <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Penilaian <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url(); ?>anilaiagama">Nilai Agama</a></li>
                            <li><a href="<?php echo base_url(); ?>anilaibahasa">Nilai Bahasa</a></li>
                            <li><a href="<?php echo base_url(); ?>anilaifisik">Nilai Fisik</a></li>
                            <li><a href="<?php echo base_url(); ?>anilaikonsep">Nilai Konsep</a></li>
                            <li><a href="<?php echo base_url(); ?>anilaipengetahuan">Nilai Pengetahuan</a></li>
                            <li><a href="<?php echo base_url(); ?>anilaisosial">Nilai Sosial</a></li>
                          </ul>
                        </li>
						<li class="dropdown <?php if($this->uri->segment(1) == "akategori" || $this->uri->segment(1) == "apenilaian") echo "active"; ?>" >
                          <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pengaturan <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url(); ?>akategori">Kategori</a></li>
                            <li><a href="<?php echo base_url(); ?>apenilaian">Penilaian</a></li>
                          </ul>
                        </li>
                        <li <?php if($this->uri->segment(1) == "apesan") echo "class='active'"; ?> >
							<a href="<?php echo base_url(); ?>apesan">Pesan 
                            	
                                <?php
								$query = $this->apesan_m->jumlahpesanbaru();	// mysql_query("");
								?>
                                <span class="badge"><?php echo $query->num_rows(); ?></span>
                            </a>
						</li>                        
	                 </ul> 
                   <?php
					 }
				   ?>
       
              
              <div class="navbar-right">
              	<?php   
				   	if(!empty($this->session->userdata('aid')) && !empty($this->session->userdata('anama')) && !empty($this->session->userdata('ausername')) && !empty($this->session->userdata('apassword')) && !empty($this->session->userdata('astatus')))
					{
				?>
		              <ul class="nav navbar-nav">                    
						<li class="dropdown">
                          <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> &nbsp; <?php echo $this->session->userdata('anama'); ?> <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">      
                            <li><a href="<?php echo base_url(); ?>administrator/logout">Logout</a></li>                            
                          </ul>
                        </li>
                      </ul>
					<?php	
  					 }
					?>
                    
              </div>

            </div>
          </div>
		</nav>
      </div>
    </div>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
