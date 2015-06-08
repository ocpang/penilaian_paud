<?php
	$this->load->view("aheader_v");
?>

	<div class="container">
        <div class="page-header">
	  		<h1><small>Halaman Login Administrator</small></h1>
	    </div>
        <div class="row">
        	<div class="col-md-3"></div>
        	<div class="col-md-6">
					<?php
                    if(!empty($status)){
                        if($status == "error"){
                    ?>
                        <div class="alert alert-danger alert-dismissable" style="margin-bottom:-5px;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Login anda gagal.
                        </div>
                    <?php
                        }
                    }
                    ?>

            	<div class="panel panel-info">
                  <div class="panel-heading">Silahkan masukan akun admin anda</div>
                  <div class="panel-body">
		        	<form method="post" id="login" action="<?php echo base_url(); ?>administrator/login">
                    <table class="table table-striped table-condensed">
                        <tr>
                            <th>ID Login</th>
							<td><input type="text" class="form-control" name="nama" placeholder="Nama" required></td>
                        </tr>
                        <tr>
							<th>Sandi</th>
                            <td><input type="password" class="form-control" name="sandi" placeholder="Password" required></td>
                        </tr>
                        <tr>
                        	<th>&nbsp;</th>
                        	<td>
                        		<input type="submit" value="Login" class="btn btn-primary">
                                <input type="reset" value="Hapus" class="btn btn-danger">
                            </td>
                        </tr>
                    </table>
                    </form>
                  
                  </div>
                </div>
            </div>
		</div>        
	</div>

<?php
	$this->load->view("afooter_v");
?>