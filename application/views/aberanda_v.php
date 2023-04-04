<?php
	$this->load->view("aheader_v");
?>
	<div class="container">
		<p>&nbsp;</p>
        <p align="justify">
        Silahkan pilih menu di atas atau di bawah sesuai dengan keinginan anda. Admin diberi hak akses terhadap menu sesuai dengan level administrasinya
		</p>
		<div class="row">
          <div class="col-md-3"></div>
          <div class="col-xs-6 col-md-2" align="center">
            <a href="<?php echo base_url(); ?>admin" class="thumbnail">
              <img src="<?php echo base_url(); ?>assets/img/user-icon.png" data-src="holder.js/100%x180" alt="..."> Admin
            </a>
          </div>
          <div class="col-xs-6 col-md-2" align="center">
            <a href="<?php echo base_url(); ?>aanakdidik" class="thumbnail">
              <img src="<?php echo base_url(); ?>assets/img/member-icon.png" data-src="holder.js/100%x180" alt="..."> Anak Didik
            </a>
          </div>
          <div class="col-xs-6 col-md-2" align="center">
            <a href="<?php echo base_url(); ?>apesan" class="thumbnail">
              <img src="<?php echo base_url(); ?>assets/img/message.png" data-src="holder.js/100%x180" alt="..."> Pesan 
                <?php
					$query = $this->apesan_m->jumlahpesanbaru();	// mysql_query("");
				?>
              <span class="badge"><?php echo $query->num_rows(); ?></span>
           </a>
          </div>
          
        </div>

	</div>

<?php
	$this->load->view("afooter_v");
?>