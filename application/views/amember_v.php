<?php
	$this->load->view("aheader_v");
?>

<div class="container">
    <p>&nbsp;</p>
	<?php
	if(!empty($status)){
		if($status == "error_save"){
	?>
    	<div class="alert alert-danger alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Password <b>harus sama</b> dengan Konfirmasi Password anda.
        </div>
    <?php
		}
		elseif($status == "idlogin"){
	?>
    	<div class="alert alert-danger alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            ID Login sudah digunakan, mohon ganti dengan ID Login yang lain.
        </div>
    <?php
		}
	}
	?>
	<div class="panel panel-default">    	
        <div class="panel-heading">
            <div class="pull-left">
                <h4>Member</h4>
            </div>
        <?PHP
        	if($this->session->userdata('astatus') == 'admin')
			{
		?>            
            <div class="pull-right">
                <button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_member">
                    <i class="glyphicon glyphicon-plus"></i> Tambah
                </button>
              	<button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_confirm">
                    <i class="glyphicon glyphicon-trash"></i> Hapus Semua
                </button>
              	<button class="btn btn-success btn-sm excel" title="Export ke Excel" >
                    <i class="glyphicon glyphicon-export"></i> Export ke Excel
                </button>
              	<button class="btn btn-success btn-sm pdf" title="Export ke Excel" >
                    <i class="glyphicon glyphicon-export"></i> Export ke PDF
                </button>
            </div>
        <?PHP
			}
			elseif($this->session->userdata('astatus') == 'user')
			{
		?>            
            <div class="pull-right">
              	<button class="btn btn-success btn-sm excel" title="Export ke Excel" >
                    <i class="glyphicon glyphicon-export"></i> Export ke Excel
                </button>
              	<button class="btn btn-success btn-sm pdf" title="Export ke Excel" >
                    <i class="glyphicon glyphicon-export"></i> Export ke PDF
                </button>
            </div>
        <?PHP
			}
		?>
            
            <div class="clearfix"></div>
        </div>

        	<table class="table table-hover table-striped table-condensed" id="table">
				<thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kota</th>
                        <th>ID Login</th>
                        <th>Waktu Login</th>
                        <th>Waktu Logout</th>
                    
                    <?PHP
                        if($this->session->userdata('astatus') == 'admin')
                        {
                    ?>
                    
                    <th>Modifikasi</th>
                    
                    <?PHP
                        }
                    ?>
                    </tr>
				</thead>
                <tbody>                
                <?PHP
                	$query = $this->amember_m->view();
					
					foreach($query->result() as $row) :
				?>
                
                    <tr>
                        <td><?PHP echo $row->nama; ?>
                        <input type="hidden" id="idmember_<?php echo $row->idmember; ?>" value="<?php echo $row->idmember; ?>" />
                        <input type="hidden" id="nama_<?php echo $row->idmember; ?>" value="<?php echo $row->nama; ?>" />                        	
                        </td>
                        <td><?PHP echo $row->namakota; ?>
                        <input type="hidden" id="namakota_<?php echo $row->idmember; ?>" value="<?php echo $row->idkota; ?>" />
                        </td>
                        <td><?PHP echo $row->idlogin; ?>
                        <input type="hidden" id="idlogin_<?php echo $row->idmember; ?>" value="<?php echo $row->idlogin; ?>" />
                        </td>
                        <td><?PHP echo $row->timelogin; ?></td>
                        <input type="hidden" id="timelogin_<?php echo $row->idmember; ?>" value="<?php echo $row->timelogin; ?>" />                        <td><?PHP echo $row->timelogout; ?></td>
                        <input type="hidden" id="timelogout_<?php echo $row->idmember; ?>" value="<?php echo $row->timelogout; ?>" />                        	                        
                        <?PHP
                            if($this->session->userdata('astatus') == 'admin')
                            {
                        ?>
                        
                        <td>
                            <button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_member" id="edit_<?PHP echo $row->idmember; ?>">
                                <i class="glyphicon glyphicon-edit"></i> Ubah
                            </button>
                            <button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_confirm" id="delete_<?PHP echo $row->idmember; ?>" >
                                <i class="glyphicon glyphicon-trash"></i> Hapus
                            </button>
                        </td>
                        
                        <?PHP
                            }
                        ?>
                    </tr>
                <?PHP
                	endforeach;
				?>
				</tbody>                
            </table>
    </div>
</div>
<div class="modal fade" id="modal_member">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Member</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_member">
                	<div class="form-group">
                    	<label>Nama</label>
                    	<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                        <input type="hidden" name="idmember_tmp" id="idmember_tmp" />
                    </div>
                    <div class="form-group">
                    	<label>Nama Kota</label>
                        <select name="namakota" id="namakota" class="form-control" required >
						<?PHP
                            $query = $this->akota_m->daftarkota();                            
                            foreach($query->result() as $row) :
                        ?>
                        	<option value="<?php echo $row->idkota; ?>"><?php echo $row->namakota; ?></option>
                        <?php
						endforeach;
						?>
                        </select>
                    </div>
                    <div class="form-group">
                    	<label>ID Login</label>
                    	<input type="text" class="form-control" name="idlogin" id="idlogin" placeholder="Email atau ID" required>
                        <input type="hidden" name="idlogin_tmp" id="idlogin_tmp" />
                    </div>
                    <div class="form-group">
                    	<label>Password</label>
                    	<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                    	<label>Konfirmasi Password</label>
                    	<input type="password" class="form-control" name="konfpassword" id="konfpassword" placeholder="Konfirmasi Password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_member" id="save">
                	Simpan
                </button>
            	<button class="btn btn-primary btn-sm" type="submit" form="form_member" id="update">
                	Perbaharui
                </button>
                <button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_confirm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-left">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <p class="text-left" id="confirm_str">&nbsp;  </p>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(null);" class="btn btn-primary" id="delete_all">Hapus Semua</a>
                <a href="javascript:void(null);" class="btn btn-primary" id="delete">Hapus</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<?PHP
	$this->load->view('afooter_v');
?>

<script type="text/javascript">
	$(document).ready(function(){

		$('.add').click(function(){
			$('#save').show();
			$('#update').hide();
			
			$('#nama').val('');
			$('#namakota').val('');
			$('#idlogin').val('');
			$('#password').val('');
			$('#konfpassword').val('');
			$('#idlogin').attr('disabled',false);			
			
			$('#form_member').attr('action','<?PHP echo base_url(); ?>amember/save');
			
		});	
		
		$(".edit").click(function(){
			$('#save').hide();
			$('#update').show();
			
			var id = this.id.substr(5);
			
			$('#idmember_tmp').val(id);
			$('#nama').val($('#nama_' + id).val());
			$('#namakota').val($('#namakota_' + id).val());
			$('#idlogin').val($('#idlogin_' + id).val());
			$('#idlogin_tmp').val($('#idlogin_' + id).val());
			$('#idlogin').attr('disabled',true);		
				
			$('#form_member').attr('action','<?PHP echo base_url(); ?>amember/update');
					
		});
		
		$(".delete").click(function() {
			$("#delete").show();
			$("#delete_all").hide();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus data ?");
			
			var id = this.id.substr(7);
			
			$("#idmember_tmp").val(id);
		});
		
		$(".delete_all").click(function() {
			$("#delete").hide();
			$("#delete_all").show();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus semua data ?");
		});
		
		$("#delete").click(function() {
			$.post("<?PHP echo base_url(); ?>amember/delete", { 
				idmember: $("#idmember_tmp").val() }, 
				function() {
					window.location = "<?PHP echo base_url(); ?>amember";
				}
			);
//			 	window.location = "<PHP echo base_url(); ?>program_keahlian/" + $("#id_program_keahlian").val();
		});
		
		$("#delete_all").click(function() {
			$.post("<?PHP echo base_url(); ?>amember/delete_all", {}, 
				function() {
					window.location = "<?PHP echo base_url(); ?>amember";
				}
			);
		});

		$('.excel').click(function() {
			window.location = '<?PHP echo base_url(); ?>amember/export/excel';
		});

		$('.pdf').click(function() {
			window.location = '<?PHP echo base_url(); ?>amember/export/pdf';
		});
		
		$('.table').dataTable();
		
	});
	
</script>