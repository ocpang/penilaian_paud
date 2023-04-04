<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Penilaian PAUD Flamboyan 1</title>

    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/paud.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- Fungsi Javascript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/fusioncharts/fusioncharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/fusioncharts/themes/fusioncharts.theme.zune.js"></script>

	<script type="text/javascript" charset="utf-8">
		function angka(e) {
		   if (!/^[0-9]+$/.test(e.value)) {
			  e.value = e.value.substring(0,e.value.length-1);
		   }
		}
	</script>


</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">PAUD Flamboyan 1</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Galeri</a>
                    </li>
                    <li class="page-scroll">
						<?php
                        if($this->session->userdata('nama')  == ''){
						?>
	                        <a href="#about">Nilai Siswa</a>
                        <?php
						}
                        if($this->session->userdata('nama')<>''){
						?>
	                        <a href="<?php echo base_url(); ?>nilaianak">Nilai Siswa</a>
                        <?php
						}
						?>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Kontak</a>
                    </li>
                    <?php
					if($this->session->userdata('nama')){
					?>
                    <li class="dropdown">
                      <a href="<?php echo base_url(); ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('nama'); ?><span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url(); ?>beranda/logout">Logout</a></li>
                      </ul>
                    </li>
                    <?php
					}
					?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

