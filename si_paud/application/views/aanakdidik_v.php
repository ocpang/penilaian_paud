<?php
	$this->load->view("aheader_v");
?>

<div class="container">
    <p>&nbsp;</p>
	<?php
	if(!empty($status)){
		if($status == "berhasil"){
	?>
    	<div class="alert alert-success alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Data tersimpan.
        </div>
    <?php
		}
		else if($status == "notsame"){
	?>
    	<div class="alert alert-danger alert-dismissable">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Password dan Konfirmasi Password <b>harus sama</b>.
        </div>
    <?php
		}

	}
	?>
	<div class="panel panel-default">    	
        <div class="panel-heading">
            <div class="pull-left">
                <h4>Daftar Anak Didik</h4>
            </div>

        <?PHP
        	if($this->session->userdata('astatus') == 'admin')
			{
		?>            
            <div class="pull-right">
                <button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_anakdidik">
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
                        <th>No Induk</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggl Lahir</th>
                        <th>Agama</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                    
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
                	$query = $this->aanakdidik_m->view();
					$no = 1;					
					foreach($query->result() as $row) :
				?>
                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->noinduk; ?></td>
                        <input type="hidden" id="noinduk_<?php echo $row->noinduk; ?>" value="<?php echo $row->noinduk; ?>" />
                        <input type="hidden" id="statusanak_<?php echo $row->noinduk; ?>" value="<?php echo $row->statusanak; ?>" />
                        <td><?PHP echo $row->namalengkap; ?></td>
                        <input type="hidden" id="namalengkap_<?php echo $row->noinduk; ?>" value="<?php echo $row->namalengkap; ?>" />
                        <td><?PHP echo $row->tempatlahir; ?></td>
                        <input type="hidden" id="tempatlahir_<?php echo $row->noinduk; ?>" value="<?php echo $row->tempatlahir; ?>" />
                        <td><?PHP echo $row->tgllahir; ?></td>
                        <input type="hidden" id="tgllahir_<?php echo $row->noinduk; ?>" value="<?php echo $row->tgllahir; ?>" />
                        <td><?PHP echo $row->agama; ?></td>
                        <input type="hidden" id="agama_<?php echo $row->noinduk; ?>" value="<?php echo $row->agama; ?>" />
                        <td><?PHP echo $row->namaayah; ?></td>
                        <input type="hidden" id="namaayah_<?php echo $row->noinduk; ?>" value="<?php echo $row->namaayah; ?>" />
                        <td><?PHP echo $row->namaibu; ?></td>
                        <input type="hidden" id="namaibu_<?php echo $row->noinduk; ?>" value="<?php echo $row->namaibu; ?>" />
                        <input type="hidden" id="namawali_<?php echo $row->noinduk; ?>" value="<?php echo $row->namawali; ?>" />
                        	                       
                        <?PHP
                            if($this->session->userdata('astatus') == 'admin')
                            {
                        ?>
                        
                        <td>
                            <button class="btn btn-warning btn-sm edit" 
                            	title="Ubah" data-toggle="modal" data-target="#modal_anakdidik" id="edit_<?PHP echo $row->noinduk; ?>"
                             >
                                <i class="glyphicon glyphicon-edit"></i> Ubah
                            </button>
                            
                            <button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" 
                            	data-target="#modal_confirm" id="delete_<?PHP echo $row->noinduk; ?>" 
                             >
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

<div class="modal fade" id="modal_confirm">
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

<div class="modal fade" id="modal_anakdidik">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Anak Didik</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_anakdidik">
				<div class="row">
                	<div class="col-md-6">
                        <div class="form-group">
                            <label>No Induk</label>
                            <input type="text" class="form-control" name="noinduk" id="noinduk" placeholder="No Induk" onkeyup="angka(this);"  required>
                            <input type="hidden" name="noinduk_tmp" id="noinduk_tmp" />
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="namalengkap" id="namalengkap" placeholder="Nama Lengkap" required />
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgllahir" id="tgllahir" placeholder="YYYY-MM-DD" required>
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <select name="agama" id="agama" class="form-control">
                            	<option value="Islam">Islam</option>
                            	<option value="Khatolik">Khatolik</option>
                            	<option value="Protestan">Protestan</option>
                            	<option value="Budha">Budha</option>
                            	<option value="Hindu">Hindu</option>
                            	<option value="Kong Hu Chu">Kong Hu Chu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Anak</label>
                            <select name="statusanak" id="statusanak" class="form-control">
                            	<option value="Kandung">Kandung</option>
                            	<option value="Tiri">Tiri</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control" name="namaayah" id="namaayah" placeholder="Nama Ayah" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control" name="namaibu" id="namaibu" placeholder="Nama Ibu" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Wali</label>
                            <input type="text" class="form-control" name="namawali" id="namawali" placeholder="Nama Wali">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" class="form-control" name="konfpassword" id="konfpassword" placeholder="Konfirmasi Password" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_anakdidik" id="save">
                	Simpan
                </button>
            	<button class="btn btn-primary btn-sm" type="submit" form="form_anakdidik" id="update">
                	Perbaharui
                </button>
                <button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
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
			
			$('#noinduk').val('');
			$('#namalengkap').val('');
			$('#tempatlahir').val('');
			$('#tgllahir').val('');
			$('#agama').val('');
			$('#statusanak').val('');
			$('#namaayah').val('');
			$('#namaibu').val('');
			$('#namawali').val('');
			$('#password').val('');
			
			$('#form_anakdidik').attr('action','<?PHP echo base_url(); ?>aanakdidik/save');
			
		});	
		
		$(".edit").click(function(){
			$('#save').hide();
			$('#update').show();
			
			var id = this.id.substr(5);
			
			$('#noinduk').val(id);
			$('#noinduk_tmp').val(id);
			$('#namalengkap').val($('#namalengkap_' + id).val());
			$('#tempatlahir').val($('#tempatlahir_' + id).val());
			$('#tgllahir').val($('#tgllahir_' + id).val());
			$('#agama').val($('#agama_' + id).val());
			$('#statusanak').val($('#statusanak_' + id).val());
			$('#namaayah').val($('#namaayah_' + id).val());
			$('#namaibu').val($('#namaibu_' + id).val());
			$('#namawali').val($('#namawali_' + id).val());
			$('#password').val($('#password_' + id).val());
			
			$('#noinduk').attr('disabled',true);

			$('#form_anakdidik').attr('action','<?PHP echo base_url(); ?>aanakdidik/update');
					
		});
		
		$(".delete").click(function() {
			$("#delete").show();
			$("#delete_all").hide();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus data ?");
			
			var id = this.id.substr(7);
			
			$("#noinduk_tmp").val(id);
		});
		
		$(".delete_all").click(function() {
			$("#delete").hide();
			$("#delete_all").show();
			
			$("#confirm_str").html("Apakah Anda yakin akan menghapus semua data ?");
		});
		
		$("#delete").click(function() {
			$.post("<?PHP echo base_url(); ?>aanakdidik/delete", { 
				noinduk: $("#noinduk_tmp").val() }, 
				function() {
					window.location = "<?PHP echo base_url(); ?>aanakdidik";
				}
			);
//			 	window.location = "<PHP echo base_url(); ?>program_keahlian/" + $("#id_program_keahlian").val();
		});
		
		$("#delete_all").click(function() {
			$.post("<?PHP echo base_url(); ?>aanakdidik/delete_all", {}, 
				function() {
					window.location = "<?PHP echo base_url(); ?>aanakdidik";
				}
			);
		});

		$('.excel').click(function() {
			window.location = '<?PHP echo base_url(); ?>aanakdidik/export/excel';
		});

		$('.pdf').click(function() {
			window.location = '<?PHP echo base_url(); ?>aanakdidik/export/pdf';
		});
		
		$('.table').dataTable();
		
	});
	
</script>