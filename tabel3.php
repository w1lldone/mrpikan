            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Laporan Pedagang Ikan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="modul.php?isi=input3&act=input">
                                <button type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>  Transaksi baru</button>
                            </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>								                                           
                                            <th>Pedagang</th>
                                            <th>Volume(kg)</th>
                                            <th>Harga(Rp/kg)</th>
                                            <th>Biaya(Rp/kg)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 										
											include"config.php";
											function ambil($tabel, $kolom, $where, $id){
												$sqll="select $kolom from $tabel where $where = $id";
												$qq=mysql_query($sqll) or die(mysql_error());
												$roww=mysql_fetch_array($qq);
												return "$roww[$kolom]";
											}
											$sql="select * from laporan where idsk=$sektor order by tanggal desc";
											$q=mysql_query($sql) or die(mysql_error());
											while ($row=mysql_fetch_array($q)){						
												echo"<tr class='odd gradeX'>";
												echo"<td>$row[tanggal]</td>";
    											echo"<td>".ambil('pedagang', 'nama', 'idpd', $row['idpd'])."</td>";					
                                                echo"<td>$row[vol]</td>";
                                                echo"<td>$row[h3]</td>";
                                                echo"<td>$row[b3]</td>";?>												
												    <td class="text-center">
                                                    <a href="modul.php?isi=input3&act=edit&id=<?php echo $row['idl'] ?>"><button type="button" class="btn btn-info">Edit</button> 
                                                    <a href="hapus.php?tabel=tabel3&id=<?php echo $row['idl'] ?>" onclick="return confirm('Anda Yakin?')"><button type="button" class="btn btn-danger">Hapus</button></a></td>                      
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                           
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->