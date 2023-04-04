        	<table>
                    <tr>
            			<th>No</th>
                        <th>No Induk</th>
                        <th>Penilaian</th>                    
                        <th>Nilai</th>
                        <th>Keterangan</th>                    
			        </tr>
                <?PHP
                	$query = $this->apenilaian_m->viewallnilaipengetahuan();
					$no = 1;
					foreach($query->result() as $row) :
				?>
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->noinduk; ?></td>
                        <td><?PHP echo $row->penilaian; ?></td>
                        <td><?PHP echo $row->nilai; ?></td>
                        <td><?PHP echo $row->keterangan; ?></td>
                    </tr>
                <?PHP
                	endforeach;
				?>
            </table>