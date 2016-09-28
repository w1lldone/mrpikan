            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Sektor Perikanan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="modul.php?isi=tambahsk&act=input">
                                <button type="button" class="btn btn-primary"><i class="fa fa-plus-square"></i>  Tambah Sektor</button>
                            </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Sektor</th>
                                            <th>Alamat</th>
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 										
											$sql="select * from sektor order by idsk asc";
											$q=mysql_query($sql) or die(mysql_error());
											while ($row=mysql_fetch_array($q)){						
												echo"<tr class='odd gradeX'>";
												echo"<td>$row[nama]</td>";
												echo"<td>$row[alamat]</td>";?>
                                                <td class="text-center">
                                                    <a href="modul.php?isi=tambahsk&act=edit&id=<?php echo $row['idsk'] ?>"><button type="button" class="btn btn-info">Edit</button> 
                                                    <a href="input_anggota.php?act=hapussk&id=<?php echo $row['idsk'] ?>" onclick="return confirm('Anda Yakin?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                                                </td> 
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