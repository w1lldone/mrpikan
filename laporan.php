<?php if($_GET['act']=='input'){ ?>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Laporan Pedagang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Laporan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" action="input3.php?act=input">	
                                        <label>Tanggal</label>							
                                        <div class="form-group input-group">											 
                                            <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                            </div>
                                            <input class="form-control" name="tanggal">
                                            <input type="hidden" name="sektor" value="<?php echo $sektor; ?>">                                            
                                        </div>
                                        <label>Pedagang</label> 
                                        <div class="form-group input-group">
                                            <div class="input-group-addon">
                                                        <i class="fa fa-money">
                                                        </i>
                                            </div>
                                            <select class="form-control" name="pedagang">							
											<?php 
											$sql="select * from pedagang where idsk = $sektor";
											$q=mysql_query($sql) or die(mysql_error());
											while ($row=mysql_fetch_array($q)){
												echo"<option value='$row[idpd]'>$row[nama]</option>";
											}?>									
											</select>	
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Harga Jual total" name="hg_beli">
                                            <span class="input-group-addon">.00</span>
                                        </div>							
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Biaya Total" name="biaya">
                                            <span class="input-group-addon">.00</span>
                                        </div>			
										<label>Volume</label>
										<div class="form-group input-group">											
                                            <input type="text" class="form-control" name="vol">
                                            <span class="input-group-addon">Kg</span>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>                                     
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
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
<?php } //if act input 
    if($_GET['act']=='edit'){
        $id=$_GET['id'];
        $sql="select * from laporan where idl = $id";
        $q=mysql_query($sql) or die(mysql_error());
        $row=mysql_fetch_array($q);

        $tanggal=$row['tanggal'];
        $sektor=$row['idsk'];
        $vol=$row['vol'];
        $b3=$row['b3']*$vol;
        $h3=$row['h3']*$vol;        
        $idpd=$row['idpd'];

        $namapd=hasil("select nama from pedagang where idpd = $idpd");
?>        
        <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Laporan Pedagang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Laporan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="post" role="form" action="input3.php?act=edit">  
                                        <label>Tanggal</label>                          
                                        <div class="form-group input-group">                                             
                                            <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                            </div>
                                            <input class="form-control" name="tanggal" value="<?php echo $tanggal; ?>">
                                            <input type="hidden" name="sektor" value="<?php echo $sektor; ?>">
                                            <input type="hidden" name="id" value="<?php echo $id ?>">   
                                        </div>
                                        <label>Pedagang</label> 
                                        <div class="form-group input-group">
                                            <div class="input-group-addon">
                                                        <i class="fa fa-money">
                                                        </i>
                                            </div>
                                            <select class="form-control" name="pedagang">                           
                                            <?php 
                                            echo "<option value='$idpd'>$namapd</option>";
                                            $sql2="select * from pedagang where idsk = $sektor and idpd <> $idpd";
                                            $q2=mysql_query($sql2) or die(mysql_error());
                                            while ($row2=mysql_fetch_array($q2)){
                                                echo"<option value='$row2[idpd]'>$row2[nama]</option>";
                                            }?>                                 
                                            </select>   
                                        </div>
                                        <label>Harga Jual Total</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Harga Jual total" name="hg_beli" value="<?php echo $h3; ?>">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <label>Biaya Total</label>                          
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Biaya Total" name="biaya" value="<?php echo $b3; ?>">
                                            <span class="input-group-addon">.00</span>
                                        </div>          
                                        <label>Volume</label>
                                        <div class="form-group input-group">                                            
                                            <input type="text" class="form-control" name="vol" value="<?php echo $vol; ?>">
                                            <span class="input-group-addon">Kg</span>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>                                     
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
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