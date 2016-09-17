<?php if($_GET['act']=='input'){ // if act input ?>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Transaksi Pelelangan Ikan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">                                
                                    <form method="post" role="form" action="input2.php?act=input">										
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="date" name="tanggal" placeholder="Tahun-Bulan-Tanggal" type="text"/>
                                                    <Input type="hidden" name="sektor" value="<?php echo $sektor; ?>"/>
                                                </div>
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
                                        <label>Pemilik Kapal</label> 
                                        <div class="form-group input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user">
                                                </i>
                                            </div>                             
                                            <select class="form-control" name="pengepul">                           
                                                <?php                                           
                                                    $sql2="select * from p_kapal where idsk = $sektor";
                                                    $q2=mysql_query($sql2) or die(mysql_error());
                                                    while ($row2=mysql_fetch_array($q2)){
                                                        echo"<option value='$row2[idpk]'>$row2[nama]</option>";
                                                }?>                                 
                                            </select>   
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Harga Jual total" name="hg_jual">
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
                                
                                
                                <!-- /.col-lg-6 (nested)
                                <div class="col-lg-6">
                                    <h1>Coming Soon</h1>
                                    
                                </div>
                                /.col-lg-6 (nested) -->
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
        </div>
<?php } //if act input 
    if ($_GET['act']=='edit') {
        $id=$_GET['id'];
        $sql="select * from transaksi2 where idt2 = $id";
        $q=mysql_query($sql) or die(mysql_error());
        $row=mysql_fetch_array($q);

        $tanggal=$row['tanggal'];
        $sektor=$row['idsk'];
        $v3=$row['v3'];
        $h2=$row['v3']*$row['h2'];
        $idpd=$row['idpd'];
        $idpk=$row['idpk'];

        $namapd=hasil("select nama from pedagang where idpd = $idpd");
        $namapk=hasil("select nama from p_kapal where idpk = $idpk");
?>     
    <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Transaksi Pelelangan Ikan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">                                
                                    <form method="post" role="form" action="input2.php?act=edit">                                        
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">Date</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="date" name="tanggal" placeholder="Tahun-Bulan-Tanggal" type="text" value="<?php echo $tanggal; ?>" />
                                                    <Input type="hidden" name="sektor" value="<?php echo $sektor; ?>"/>
                                                    <Input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                                </div>
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
                                            $sql="select * from pedagang where idsk = $sektor and idpd <> $idpd";
                                            $q=mysql_query($sql) or die(mysql_error());
                                            while ($row=mysql_fetch_array($q)){
                                                echo"<option value='$row[idpd]'>$row[nama]</option>";
                                            }?>                                 
                                            </select>   
                                        </div>
                                        <label>Pemilik Kapal</label> 
                                        <div class="form-group input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user">
                                                </i>
                                            </div>                             
                                            <select class="form-control" name="pengepul">                           
                                                <?php
                                                echo "<option value='$idpk'>$namapk</option>";                                           
                                                    $sql2="select * from p_kapal where idsk = $sektor and idpk <> $idpk";
                                                    $q2=mysql_query($sql2) or die(mysql_error());
                                                    while ($row2=mysql_fetch_array($q2)){
                                                        echo"<option value='$row2[idpk]'>$row2[nama]</option>";
                                                }?>                                 
                                            </select>   
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Harga Jual total" name="hg_jual" value="<?php echo $h2 ; ?>">
                                            <span class="input-group-addon">.00</span>
                                        </div>                          
                                        
                                        <label>Volume</label>
                                        <div class="form-group input-group">                                            
                                            <input type="text" class="form-control" name="vol" value="<?php echo $v3; ?>">
                                            <span class="input-group-addon">Kg</span>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button> 
                                    </form>
                                </div>
                                
                                
                                <!-- /.col-lg-6 (nested)
                                <div class="col-lg-6">
                                    <h1>Coming Soon</h1>
                                    
                                </div>
                                /.col-lg-6 (nested) -->
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
        </div>
<?php } //if act edit ?>        