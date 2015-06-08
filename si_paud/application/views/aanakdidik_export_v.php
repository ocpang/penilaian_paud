        	<table>
                    <tr>
                        <th>No</th>
                        <th>No Induk</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggl Lahir</th>
                        <th>Agama</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                    </tr>
                <?PHP
                	$query = $this->aanakdidik_m->view();
					$no = 1;
					foreach($query->result() as $row) :
				?>                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->noinduk; ?></td>
                        <td><?PHP echo $row->namalengkap; ?></td>
                        <td><?PHP echo $row->tempatlahir; ?></td>
                        <td><?PHP echo $row->tgllahir; ?></td>
                        <td><?PHP echo $row->agama; ?></td>
                        <td><?PHP echo $row->namaayah; ?></td>
                        <td><?PHP echo $row->namaibu; ?></td>
                   </tr>
                <?PHP
                	endforeach;
				?>
            </table>