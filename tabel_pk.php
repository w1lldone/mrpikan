            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Pemilik Kapal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="modul.php?isi=input1&act=input">
                                <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-plus-square"></i>  Tambah Anggota</button>
                            </a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
											<th>Sektor</th>
                                            <th>Alamat</th>
                                            <th>No Hp</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 										
											$sql="select * from p_kapal order by idsk asc";
											$q=mysql_query($sql) or die(mysql_error());
											while ($row=mysql_fetch_array($q)){						
												echo"<tr class='odd gradeX'>";
												echo"<td>$row[nama]</td>";
												echo"<td>".hasil("select nama from sektor where idsk = $row[idsk]")."</td>";
												echo"<td>$row[alamat]</td>";
												echo"<td>$row[no_hp]</td>";} ?>
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