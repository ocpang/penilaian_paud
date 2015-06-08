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
            Data gagal tersimpan.
        </div>
    <?php
		}
	}
	?>
	<div class="panel panel-default">    	
        <div class="panel-heading">
            <div class="pull-left">
                <h4>Pesan</h4>
            </div>

        <?PHP
        	if($this->session->userdata('astatus') == 'admin')
			{
		?>            
            <div class="pull-right">
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
                        <th>No</th>                    
                    	<th>Nama Lengkap</th>
                    	<th>Email</th>
                        <th>Pesan</th>
                        <th>Status</th>                    
                    	<th>Modifikasi</th>
                    </tr>
				</thead>
                <tbody>                
                <?PHP
                	$query = $this->apesan_m->view();
					$no = 1;
					foreach($query->result() as $row) :
				?>
                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->nama; ?>
                            <input type="hidden" id="idpesan_<?php echo $row->idpesan; ?>" value="<?php echo $row->idpesan; ?>" />
                            <input type="hidden" id="nama_<?php echo $row->idpesan; ?>" value="<?php echo $row->nama; ?>" />
                        </td>
                        <td><?PHP echo $row->email; ?>
                            <input type="hidden" id="email_<?php echo $row->idpesan; ?>" value="<?php echo $row->email; ?>" />
                        </td>
                        <td><?PHP echo $row->pesan; ?>
                            <input type="hidden" id="pesan_<?php echo $row->idpesan; ?>" value="<?php echo $row->pesan; ?>" />
                        </td>
                        <td><?PHP echo $row->status; ?>
                            <input type="hidden" id="status_<?php echo $row->idpesan; ?>" value="<?php echo $row->status; ?>" />
                        </td>
                        	                       
                        <?PHP
                            if($this->session->userdata('astatus') == 'admin')
                            {
                        ?>
                        
                        <td>
                            <button class="btn btn-warning btn-sm lihat" title="Lihat" data-toggle="modal" data-target="#modal_pesan" id="lihat_<?PHP echo $row->idpesan; ?>">
                                <i class="glyphicon glyphicon-lihat"></i> Lihat
                            </button>
                            <button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_confirm" id="delete_<?PHP echo $row->idpesan; ?>" >
                                <i class="glyphicon glyphicon-trash"></i> Hapus
                            </button>
                        </td>
                        
                        <?PHP
                            }
							else {
                        ?>
                        <td>
                            <button class="btn btn-warning btn-sm lihat" title="Lihat" data-toggle="modal" data-target="#modal_pesan" id="lihat_<?PHP echo $row->idpesan; ?>">
                                <i class="glyphicon glyphicon-lihat"></i> Lihat
                            </button>
                        </td>
						<?php
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
<div class="modal fade" id="modal_pesan">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Pesan</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_pesan">

                	<div class="form-group">
                    	<label>Nama Lengkap</label>
                  		<input type="hidden" name="idpesan_tmp" id="idpesan_tmp" />
        			  	<input type="text" class="form-control" name="nama" id="nama" disabled="disabled">
                    </div>
                	<div class="form-group">
                    	<label>Email</label>
                    	<input type="email" class="form-control" name="email" id="email" disabled="disabled">
                    </div>
                	<div class="form-group">
                    	<label>Pesan</label>
                    	<textarea class="form-control" name="pesan" id="pesan" disabled="disabled" cols="20" rows="10"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default btn-sm" data-dismiss="modal" id="update">
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
		$(".lihat").click(function(){
			$('#save').hide();
			$('#update').show();
			
			var id = this.id.substr(6);

			$('#idpesan_tmp').val(id);
			$('#nama').val($('#nama_' + id).val());
			$('#email').val($('#email_' + id).val());
			$('#pesan').val($('#pesan_' + id).val());
		
		});
		
		$("#update").click(function() {
			$.post("<?PHP echo base_url(); ?>apesan/update", { 
				idpesan: $("#idpesan_tmp").val() }, 
				function() {
					window.location = "<?PHP echo base_url(); ?>apesan";
				}
			);
		});
		
		$(".delete").click(function() {
			$("#delete").show();
			$("#delete_all").hide();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus data ?");
			
			var id = this.id.substr(7);
			
			$("#idpesan_tmp").val(id);
			
		});
		
		$(".delete_all").click(function() {
			$("#delete").hide();
			$("#delete_all").show();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus semua data ?");
		});
		
		$("#delete").click(function() {
			$.post("<?PHP echo base_url(); ?>apesan/delete", { 
				idpesan: $("#idpesan_tmp").val() }, 
				function() {
					window.location = "<?PHP echo base_url(); ?>apesan";
				}
			);
//			 	window.location = "<PHP echo base_url(); ?>program_keahlian/" + $("#id_program_keahlian").val();
		});
		
		$("#delete_all").click(function() {
			$.post("<?PHP echo base_url(); ?>apesan/delete_all", {}, 
				function() {
					window.location = "<?PHP echo base_url(); ?>apesan";
				}
			);
		});

		$('.excel').click(function() {
			window.location = '<?PHP echo base_url(); ?>apesan/export/excel';
		});

		$('.pdf').click(function() {
			window.location = '<?PHP echo base_url(); ?>apesan/export/pdf';
		});
		
		$('.table').dataTable();
		
	});
	
</script>