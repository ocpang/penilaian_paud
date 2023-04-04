        	<table>
            	<thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                <?PHP
                	$query = $this->akategori_m->view();
					$no = 1;					
					foreach($query->result() as $row) :
				?>                
                    <tr>
                        <td><?PHP echo $no++; ?></td>
                        <td><?PHP echo $row->namakategori; ?></td>
                    </tr>
                <?PHP
                	endforeach;
				?>
                </tbody>
            </table>