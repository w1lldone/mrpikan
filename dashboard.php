<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Biaya Modal Penangkapan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Tabel Biaya
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Biaya Nelayan</th>
                                            <th>Biaya Pem. Kapal</th>
                                            <th>Total</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql="select * from rata where idsk = $sektor order by tanggal desc";
                                            $q=mysql_query($sql) or die(mysql_error());
                                            while ($row=mysql_fetch_array($q)){
                                                $total=$row['br1']+$row['br2'];                     
                                                echo"<tr class='odd gradeX'>";
                                                echo"<td>$row[tanggal]</td>";
                                                echo"<td>$row[br1]</td>";
                                                echo"<td>$row[br2]</td>";
                                                echo"<td>$total</td>";} ?>
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