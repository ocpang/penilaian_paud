        	<table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama Kota</th>
                        <th>ID Login</th>
                        <th>Waktu Login</th>
                        <th>Waktu Logout</th>
                    </tr>
                <?PHP
                	$query = $this->amember_m->view();
					$no = 1;
					foreach($query->result() as $row) :
				?>                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->nama; ?></td>
                        <td><?PHP echo $row->namakota; ?></td>
                        <td><?PHP echo $row->idlogin; ?></td>
                        <td><?PHP echo $row->timelogin; ?></td>
                        <td><?PHP echo $row->timelogout; ?></td>
                    </tr>
                <?PHP
                	endforeach;
				?>
            </table>