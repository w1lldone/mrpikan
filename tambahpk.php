<?php if($_GET['act']=='input'){ ?>            
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Tambah Anggota Pemiik Kapal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" action="input_anggota.php?act=inputpk">
                                        <label>Nama</label>
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">	
                                        </div> 
										<label>Nomer HP</label>
										<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>						
                                            <input type="text" class="form-control" name="no_hp">
                                        </div>
                                        <label>Alamat</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                     
                                            <input type="text" class="form-control" name="alamat">
                                        </div>
                                        <label>Sektor</label>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-anchor"></i></span>
                                            <select class="form-control" name="idsk">                           
                                                <?php                                           
                                                    $sql2="select * from sektor";
                                                    $q2=mysql_query($sql2) or die(mysql_error());
                                                    while ($row2=mysql_fetch_array($q2)){
                                                        echo"<option value='$row2[idsk]'>$row2[nama]</option>";
                                                    }?>                                 
                                            </select>   
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
        $sql="select * from p_kapal where idpk = $id";
        $q=mysql_query($sql) or die(mysql_error());
        $row=mysql_fetch_array($q);

        $nama=$row['nama'];
        $alamat=$row['alamat'];
        $idsk=$row['idsk'];
        $no_hp=$row['no_hp'];
        $namask=hasil("select nama from sektor where idsk = $idsk");   
?>
<div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Edit Anggota Pemilik Kapal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" action="input_anggota.php?act=editpk">
                                        <label>Nama</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                                            <input type="hidden" name="idpk" value="<?php echo $id ;?>"> 
                                        </div>
                                        <label>Nomer HP</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>                      
                                            <input type="text" class="form-control" name="no_hp" value="<?php echo $no_hp; ?>">
                                        </div>
                                        <label>Alamat</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>                     
                                            <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                                        </div>
                                        <label>Sektor</label>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-anchor"></i></span>
                                            <select class="form-control" name="idsk">                           
                                                <?php                                           
                                                    $sql2="select * from sektor where idsk <> $idsk";
                                                    $q2=mysql_query($sql2) or die(mysql_error());
                                                    echo "<option value='$idsk'>$namask</option>";
                                                    while ($row2=mysql_fetch_array($q2)){
                                                        echo"<option value='$row2[idsk]'>$row2[nama]</option>";
                                                    }?>                                 
                                            </select>   
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