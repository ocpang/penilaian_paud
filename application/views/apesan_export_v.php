        	<table>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Status</th>
                    </tr>
                <?PHP
                	$query = $this->apesan_m->view();
					$no = 1;					
					foreach($query->result() as $row) :
				?>                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->nama; ?></td>
                        <td><?PHP echo $row->email; ?></td>
                        <td><?PHP echo $row->pesan; ?></td>
                        <td><?PHP echo $row->status; ?></td>
                    </tr>
                <?PHP
                	endforeach;
				?>
            </table>