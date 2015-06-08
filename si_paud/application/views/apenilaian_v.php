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
                <h4>Penilaian</h4>
            </div>

        <?PHP
        	if($this->session->userdata('astatus') == 'admin')
			{
		?>            
            <div class="pull-right">
                <button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_penilaian">
                    <i class="glyphicon glyphicon-plus"></i> Tambah
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
                        <th>Kategori</th>
                        <th>Penilaian</th>
                    
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
                	$query = $this->apenilaian_m->view();
					$no = 1;
					foreach($query->result() as $row) :
				?>
                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->namakategori; ?>
                        <td><?PHP echo $row->penilaian; ?>
                            <input type="hidden" id="idpenilaian_<?php echo $row->idpenilaian; ?>" value="<?php echo $row->idpenilaian; ?>" />
                            <input type="hidden" id="kategori_<?php echo $row->idpenilaian; ?>" value="<?php echo $row->idkategorinilai; ?>" />
                            <input type="hidden" id="penilaian_<?php echo $row->idpenilaian; ?>" value="<?php echo $row->penilaian; ?>" />
                        </td>
                        	                       
                        <?PHP
                            if($this->session->userdata('astatus') == 'admin')
                            {
                        ?>
                        
                        <td>
                            <button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_penilaian" id="edit_<?PHP echo $row->idpenilaian; ?>">
                                <i class="glyphicon glyphicon-edit"></i> Ubah
                            </button>
                            <button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_confirm" id="delete_<?PHP echo $row->idpenilaian; ?>" >
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
<div class="modal fade" id="modal_penilaian">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Penilaian</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_penilaian">
                	<div class="form-group">
                    	<label>Kategori</label>
                        <input type="hidden" name="idpenilaian_tmp" id="idpenilaian_tmp" />
                        <select name="kategori" id="kategori" class="form-control">
						<?php
						$query = $this->akategori_m->view();
						foreach($query->result() as $row) :
						?>
                        	<option value="<?php echo $row->idkategorinilai; ?>"><?php echo $row->namakategori; ?></option>
                        <?php
						endforeach;
						?>
                        </select>
                    </div>
                	<div class="form-group">
                    	<label>Penilaian</label>
                    	<input type="text" class="form-control" name="penilaian" id="penilaian" placeholder="Nama penilaian" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_penilaian" id="save">
                	Simpan
                </button>
            	<button class="btn btn-primary btn-sm" type="submit" form="form_penilaian" id="update">
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
			
			$('#kategori').val('');
			$('#penilaian').val('');
			
			$('#form_penilaian').attr('action','<?PHP echo base_url(); ?>apenilaian/save');
			
		});	
		
		$(".edit").click(function(){
			$('#save').hide();
			$('#update').show();
			
			var id = this.id.substr(5);
			
			$('#idpenilaian_tmp').val(id);
			$('#kategori').val($('#kategori_' + id).val());
			$('#penilaian').val($('#penilaian_' + id).val());

			$('#form_penilaian').attr('action','<?PHP echo base_url(); ?>apenilaian/update');
					
		});
		
		$(".delete").click(function() {
			$("#delete").show();
			$("#delete_all").hide();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus data ?");
			
			var id = this.id.substr(7);
			
			$("#idpenilaian_tmp").val(id);
		});
		
		$(".delete_all").click(function() {
			$("#delete").hide();
			$("#delete_all").show();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus semua data ?");
		});
		
		$("#delete").click(function() {
			$.post("<?PHP echo base_url(); ?>apenilaian/delete", { 
				idpenilaian: $("#idpenilaian_tmp").val() }, 
				function() {
					window.location = "<?PHP echo base_url(); ?>apenilaian";
				}
			);
//			 	window.location = "<PHP echo base_url(); ?>program_keahlian/" + $("#id_program_keahlian").val();
		});
		
		$("#delete_all").click(function() {
			$.post("<?PHP echo base_url(); ?>apenilaian/delete_all", {}, 
				function() {
					window.location = "<?PHP echo base_url(); ?>apenilaian";
				}
			);
		});

		$('.excel').click(function() {
			window.location = '<?PHP echo base_url(); ?>apenilaian/export/excel';
		});

		$('.pdf').click(function() {
			window.location = '<?PHP echo base_url(); ?>apenilaian/export/pdf';
		});
		
		$('.table').dataTable();
		
	});
	
</script>