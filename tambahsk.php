<?php if($_GET['act']=='input'){ ?>            
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Tambah Sektor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Sektor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" action="input_anggota.php?act=inputsk">
                                        <label>Nama Sektor</label>
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-anchor"></i></span>
                                            <input type="text" class="form-control" placeholder="PPN / PPS / PPP" name="nama">	
                                        </div> 
                                        <label>Alamat</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                     
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php } // if act input 
    else if ($_GET['act']=='edit') { 
        $id=$_GET['id'];    
        $sql="select * from sektor where idsk = $id";
        $q=mysql_query($sql) or die(mysql_error());
        $row=mysql_fetch_array($q);

        $nama=$row['nama'];
        $alamat=$row['alamat'];   
?>
<div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Edit Sektor Perikanan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Sektor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" action="input_anggota.php?act=editsk">
                                        <label>Nama Sektor</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-anchor"></i></span>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                                            <input type="hidden" name="idpd" value="<?php echo $id ;?>"> 
                                        </div>
                                        <label>Alamat</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                     
                                            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>  
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php } //if act edit ?>