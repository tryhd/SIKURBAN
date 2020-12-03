<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=Laporan Pengukuran.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
 ?>
 <table border="1" width="100%">
      <thead>
           <tr>
                <th>ID Pengukuran</th>
                <th>Gardu</th>
                <th>N 1</th>
 				<th>R 1</th>
 				<th>S 1</th>
 				<th>T 1</th>
 				<th>N 2</th>
 				<th>R 2</th>
 				<th>S 2</th>
 				<th>T 2</th>
 				<th>N 3</th>
 				<th>R 3</th>
 				<th>S 3</th>
 				<th>T 3</th>
 				<th>N 4</th>
 				<th>R 4</th>
 				<th>S 4</th>
 				<th>T 4</th>
 				<th>N 5</th>
 				<th>R 5</th>
 				<th>S 5</th>
 				<th>T 5</th>
 				<th>N 6</th>
 				<th>R 6</th>
 				<th>S 6</th>
 				<th>T 6</th>
 				<th>N 7</th>
 				<th>R 7</th>
 				<th>S 7</th>
 				<th>T 7</th>
 				<th>N 8</th>
 				<th>R 8</th>
 				<th>S 8</th>
 				<th>T 8</th>
 				<th>N 9</th>
 				<th>R 9</th>
 				<th>S 9</th>
 				<th>T 9</th>
 				<th>N 10</th>
 				<th>R 10</th>
 				<th>S 10</th>
 				<th>T 10</th>
 				<th>Tegangan N</th>
 				<th>Tegangan R</th>
 				<th>Tegangan S</th>
 				<th>Tegangan T</th>
 				<th>Beban Terukur</th>
 				<th>Beban Trafo</th>
 				<th>Petugas</th>
 				<th>Tanggal Pengukuran</th>
           </tr>
 
      </thead>
 
      <tbody>
 		<?php
            if(!empty($getPengukuran)){
            foreach($getPengukuran as $value) { ?>
           <tr>
 				<td><?php echo$value->id_pengukuran;?></td>
                                                            <td><?php echo$value->nama_gardu;?></td>
                                                            <td><?php echo$value->n1;?></td>
                                                            <td><?php echo$value->r2;?></td>
                                                            <td><?php echo$value->s1;?></td>
                                                            <td><?php echo$value->t1;?></td>
                                                            <td><?php echo$value->n2;?></td>
                                                            <td><?php echo$value->r2;?></td>
                                                            <td><?php echo$value->s2;?></td>
                                                            <td><?php echo$value->t2;?></td>
                                                            <td><?php echo$value->n3;?></td>
                                                            <td><?php echo$value->r3;?></td>
                                                            <td><?php echo$value->s3;?></td>
                                                            <td><?php echo$value->t3;?></td>
                                                            <td><?php echo$value->n4;?></td>
                                                            <td><?php echo$value->r4;?></td>
                                                            <td><?php echo$value->s4;?></td>
                                                            <td><?php echo$value->t4;?></td>
                                                            <td><?php echo$value->n5;?></td>
                                                            <td><?php echo$value->r5;?></td>
                                                            <td><?php echo$value->s5;?></td>
                                                            <td><?php echo$value->t5;?></td>
                                                            <td><?php echo$value->n6;?></td>
                                                            <td><?php echo$value->r6;?></td>
                                                            <td><?php echo$value->s6;?></td>
                                                            <td><?php echo$value->t6;?></td>
                                                            <td><?php echo$value->n7;?></td>
                                                            <td><?php echo$value->r7;?></td>
                                                            <td><?php echo$value->s7;?></td>
                                                            <td><?php echo$value->t7;?></td>
                                                            <td><?php echo$value->n8;?></td>
                                                            <td><?php echo$value->r8;?></td>
                                                            <td><?php echo$value->s8;?></td>
                                                            <td><?php echo$value->t8;?></td>
                                                            <td><?php echo$value->n9;?></td>
                                                            <td><?php echo$value->r9;?></td>
                                                            <td><?php echo$value->s9;?></td>
                                                            <td><?php echo$value->t9;?></td>
                                                            <td><?php echo$value->n10;?></td>
                                                            <td><?php echo$value->r10;?></td>
                                                            <td><?php echo$value->s10;?></td>
                                                            <td><?php echo$value->t10;?></td>
                                                            <td><?php echo$value->tegangan_n;?></td>
                                                            <td><?php echo$value->tegangan_r;?></td>
                                                            <td><?php echo$value->tegangan_s;?></td>
                                                            <td><?php echo$value->tegangan_t;?></td>
                                                            <td><?php echo$value->beban_terukur;?></td>
                                                            <td><?php echo$value->beban_trafo;?></td>
                                                            <td><?php echo$value->nama;?></td>
                                                            <td><?php echo$value->tgl_pengukuran;?></td>
 
           </tr>
			<?php   }
               }?>
 
      </tbody>
 
 </table>