        	<table>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Penilaian</th>
                    </tr>
                <?PHP
                	$query = $this->apenilaian_m->view();
					$no = 1;					
					foreach($query->result() as $row) :
				?>                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->namakategori; ?></td>
                        <td><?PHP echo $row->penilaian; ?></td>
                    </tr>
                <?PHP
                	endforeach;
				?>
            </table>