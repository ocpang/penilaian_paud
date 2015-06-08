<?php
	$this->load->view("header_v.php");
?>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row" style="margin-top:-30px">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?php echo base_url();?>assets/img/logo.png" width="200" alt="">
                    <div class="intro-text">
                        <span class="name"><small>Penilaian PAUD Flamboyan 1</small></span>
                        <hr class="star-light">
                        <span class="skills">Sehat - Cerdas - Ceria</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Galeri</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/portfolio/P1.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/portfolio/P2.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/portfolio/P3.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/portfolio/P4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/portfolio/P5.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url();?>assets/img/portfolio/P6.jpg" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>        
    </section>

    <!-- Nilai Section -->    
	<?php
    if($this->session->userdata('nama') ==''){
    ?>
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Nilai Siswa</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                	<h3>Informasi Akademik</h3>
                    <p>Silahkan bagi orang tua anak didik untuk login terlebih dahulu agar dapat melihat seluruh daftar nilai anaknya.</p>
                </div>
                <div class="col-md-4">
					<?php
                    if(!empty($status)){
                        if($status == "gagallogin"){
                    ?>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Login anda gagal.
                        </div>
                    <?php
                        }
                    }
                    ?>
                	<h3>Login</h3>
                    <form method="post" action="<?php echo base_url(); ?>beranda/login" id="frmlogin" >
                        <div class="form-group">
                            <label>No Induk</label>
                            <input type="text" class="form-control" name="noinduk" id="noinduk" placeholder="No Induk anak" onkeyup="angka(this);" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-sm" type="submit" form="frmlogin" id="masuk" value="Masuk" />
                            <input class="btn btn-default btn-sm" type="reset" value="Batal" />
                        </div>
                    </form>                    
                	<p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                
			</div>
        </div>
    </section>
	<?php
	}
	?>

    <!-- Contact Section -->
	<?php
    if($this->session->userdata('nama')<>''){
    ?>
   	<section class="success" id="contact">
	<?php
	}
	else {
	?>
   	<section id="contact">
    <?php
	}
	?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Kontak Kami</h2>
					<?php
                    if($this->session->userdata('nama')<>''){
                    ?>
                    <hr class="star-light">
                    <?php
                    }
                    else {
                    ?>
                    <hr class="star-primary">
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                      	<h3>Kunjungi PAUD Flamboyan 1</h3>
                        <p><small><span class="glyphicon glyphicon-map-marker"></span> &nbsp; <b>Alamat</b> </small></p>
                        <p><small> &nbsp;  &nbsp;  &nbsp; &nbsp;Kp. Kamurang RT.04/03</small></p>
                        <p><small> &nbsp;  &nbsp;  &nbsp; &nbsp;Kelurahan Puspanegara</small></p>
                        <p><small> &nbsp;  &nbsp;  &nbsp; &nbsp;Kecamatan Citeureup</small></p>
                        <p><small> &nbsp;  &nbsp;  &nbsp; &nbsp;Kabupaten Bogor - Jawa Barat, Indonesia</small></p>                        
                        <p><small><span class="glyphicon glyphicon-earphone"></span> &nbsp; <b>Telepon</b> +62 251 8329101</small></p>
                        <p><small><span class="glyphicon glyphicon-envelope"></span> &nbsp; <b>Email</b> admin@paudflamboyan1.com</small></p>
                </div>
                <div class="col-md-5">
                	<p>&nbsp;</p>                    
                   	<h3>Kirim Pesan</h3>
                    <form action="<?php echo base_url(); ?>beranda/pesan" method="post">
                        <p><input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required /></p>
                        <p><input type="email" name="email" class="form-control" placeholder="Email" required /></p>
                        <p><input type="text" name="pesan" class="form-control" placeholder="Pesan" required /></p>                        
                        <p><input type="submit" name="kirim" class="btn btn-primary" value="Kirim Pesan" required /> <input type="reset" name="kirim" class="btn btn-default" value="Batal" required /></p>                        
                    </form>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:-50px">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Kegiatan Menggambar Outdoor</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/P1.jpg" class="img-responsive img-centered" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:-50px">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Praktek Dokter Kecil</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/P2.jpg" class="img-responsive img-centered" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:-50px">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Kegiatan Bermain Alat Musik</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/P3.jpg" class="img-responsive img-centered" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:-50px">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Simulasi Manasik Haji</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/P4.jpg" class="img-responsive img-centered" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:-50px">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Kegiatan Hari Kartini</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/P5.jpg" class="img-responsive img-centered" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:-50px">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Kegiatan Wisuda</h2>
                            <hr class="star-primary">
                            <img src="<?php echo base_url();?>assets/img/portfolio/P6.jpg" class="img-responsive img-centered" alt="">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
	$this->load->view("footer_v.php");
?>
