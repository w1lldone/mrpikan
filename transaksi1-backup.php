<?php if($_GET['act']=='input'){ ?>            
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h1 class="page-header">Input</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Nelayan dan Pemilik kapal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 col-lg-offset-3">
                                    <form method="post" role="form" action="input1.php?act=input">										
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">Tanggal</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="date" name="tanggal" placeholder="Tahun-Bulan-Tanggal" type="text"/>
                                                    <input type="hidden" name="sektor" value="<?php echo $sektor; ?>">
                                                </div>
                                        </div>                                        
                                        <label>Nelayan</label>
                                        <div class="form-group input-group">                                            
                                            <span class="input-group-addon"><i class="fa fa-anchor"></i></span>
                                            <select class="form-control" name="nelayan">							
											<?php 
											include"data.php";
											$sql="select * from nelayan where idsk = $sektor";
											$q=mysql_query($sql) or die(mysql_error());
											while ($row=mysql_fetch_array($q)){
												echo"<option value='$row[idn]'>$row[nama]</option>";
											}?>									
											</select>	
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Biaya Nelayan total" name="b_nelayan">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <label>Pemilik Kapal</label>
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select class="form-control" name="pengepul">							
    											<?php 											
        											$sql2="select * from p_kapal where idsk = $sektor";
        											$q2=mysql_query($sql2) or die(mysql_error());
        											while ($row2=mysql_fetch_array($q2)){
        												echo"<option value='$row2[idpk]'>$row2[nama]</option>";
    											    }?>									
											</select>	
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">Rp</span>
                                                    <input type="text" class="form-control" placeholder="Biaya Pemilik Kapal total" name="b_pengepul">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="form-group input-group">                                                    
                                                    <input type="text" class="form-control" placeholder="Bagian Pem. Kapal" name="persen">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                            </div>
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
                                    <h2>Transaksi Terkini</h2>
                                    <ul class="timeline"> 
                                <?php                                         
                                        $sql3="select * from transaksi1 where idsk = $sektor order by tanggal DESC limit 0,3";
                                        $q3=mysql_query($sql3) or die(mysql_error());
                                        $counts=mysql_num_rows($q3);
                                        if ($counts!=0){
                                            $a=1;
                                            ?>
                                     
                                            <?php                                           
                                            while ($row3=mysql_fetch_array($q3)) {
                                                $nelayan=hasil("select nama from nelayan where idn = '$row3[idn]'");
                                                $pengepul=hasil("select nama from p_kapal where idpk = '$row3[idpk]'");
                                                if ($a%2!=0){
                                                    ?><li><?php
                                                } else{
                                                   ?><li class="timeline-inverted"><?php
                                                } ?>                                                
                                                    <div class="timeline-badge"><i class="fa fa-money"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h4 class="timeline-title"><i class="fa fa-anchor"></i> <?php echo $nelayan; ?></h4>
                                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $row3['tanggal']?></small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p><i class="fa fa-user"></i> <?php echo $pengepul; ?></p>
                                                            <p><i class="fa fa-shopping-cart"></i> <?php echo $row3['vol']; ?> Kg</p>
                                                            <p><i class="fa fa-money"></i> Nelayan : Rp.<?php echo $row3['b1']; ?></p>
                                                            <p><i class="fa fa-money"></i> Pem. kapal : Rp.<?php echo $row3['b2']; ?></p>
                                                        </div>
                                                    </div>
                                                </li>                                                       
                                               
                                    <?php $a++; }  //while ambil data transaksi2 ?>
                                    </ul>
                                   <?php } ?> 
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
<?php } // if act input 
    else if ($_GET['act']=='edit') { 
        $id=$_GET['id'];    
        include"data.php";
        $sql="select * from transaksi1 where idt1 = $id";
        $q=mysql_query($sql) or die(mysql_error());
        $row=mysql_fetch_array($q);

        $tanggal=$row['tanggal'];
        $vol=$row['vol'];
        $bn=$row['b1']*$row['vol'];
        $bp=$row['b2']*$row['vol'];
        $persen=$row['persen'];

        $idn=$row['idn'];
        $naman=hasil("select nama from nelayan where idn = $idn");

        $idpk=$row['idpk'];
        $namap=hasil("select nama from p_kapal where idpk = $idpk");      
?>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Nelayan dan Pemilik kapal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" role="form" action="input1.php?act=edit">                                        
                                        <div class="form-group"> <!-- Date input -->
                                            <label class="control-label" for="date">Tanggal</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar">
                                                        </i>
                                                    </div>
                                                    <input class="form-control" id="date" name="tanggal" placeholder="Tahun-Bulan-Tanggal" type="text" value="<?php echo $tanggal; ?>"/>
                                                    <input type="hidden" name="sektor" value="<?php echo $sektor; ?>">
                                                    <input type="hidden" name="idt1" value="<?php echo $id; ?>">
                                                </div>
                                        </div>                                        
                                        <label>Nelayan</label>
                                        <div class="form-group input-group">                                            
                                            <span class="input-group-addon"><i class="fa fa-anchor"></i></span>
                                            <select class="form-control" name="nelayan">
                                            <option value="<?php echo $idn.'">'.$naman; ?></option>                           
                                            <?php                                                                                       
                                            $sql="select * from nelayan where idn <> $idn and idsk = $sektor";
                                            $q=mysql_query($sql) or die(mysql_error());
                                            while ($row=mysql_fetch_array($q)){
                                                echo"<option value='$row[idn]'>$row[nama]</option>";
                                            }?>                                 
                                            </select>   
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control" placeholder="Biaya Nelayan total" name="b_nelayan" value="<?php echo $bn; ?>">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <label>Pemilik Kapal</label>
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select class="form-control" name="pengepul">
                                            <option value="<?php echo $idpk.'">'.$namap; ?></option>                           
                                                <?php                                           
                                                    $sql2="select * from p_kapal where idsk = $sektor and idpk <> $idpk";
                                                    $q2=mysql_query($sql2) or die(mysql_error());
                                                    while ($row2=mysql_fetch_array($q2)){
                                                        echo"<option value='$row2[idpk]'>$row2[nama]</option>";
                                                    }?>                                 
                                            </select>   
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">Rp</span>
                                                    <input type="text" class="form-control" placeholder="Biaya Pemilik Kapal total" name="b_pengepul" value="<?php echo $bp;?>">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="form-group input-group">                                                    
                                                    <input type="text" class="form-control" placeholder="Bagian Pem. Kapal" name="persen" value="<?php echo $persen*100; ?>">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                            </div>
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
                                    <h2>Transaksi Terkini</h2>
                                    <ul class="timeline"> 
                                <?php                                         
                                        $sql3="select * from transaksi1 where idsk = $sektor order by tanggal DESC limit 0,3";
                                        $q3=mysql_query($sql3) or die(mysql_error());
                                        $counts=mysql_num_rows($q3);
                                        if ($counts!=0){
                                            $a=1;
                                            ?>
                                     
                                            <?php                                           
                                            while ($row3=mysql_fetch_array($q3)) {
                                                $nelayan=hasil("select nama from nelayan where idn = '$row3[idn]'");
                                                $pengepul=hasil("select nama from p_kapal where idpk = '$row3[idpk]'");
                                                if ($a%2!=0){
                                                    ?><li><?php
                                                } else{
                                                   ?><li class="timeline-inverted"><?php
                                                } ?>                                                
                                                    <div class="timeline-badge"><i class="fa fa-money"></i>
                                                    </div>
                                                    <div class="timeline-panel">
                                                        <div class="timeline-heading">
                                                            <h4 class="timeline-title"><i class="fa fa-anchor"></i> <?php echo $nelayan; ?></h4>
                                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo $row3['tanggal']?></small>
                                                            </p>
                                                        </div>
                                                        <div class="timeline-body">
                                                            <p><i class="fa fa-user"></i> <?php echo $pengepul; ?></p>
                                                            <p><i class="fa fa-shopping-cart"></i> <?php echo $row3['vol']; ?> Kg</p>
                                                            <p><i class="fa fa-money"></i> Nelayan : Rp.<?php echo $row3['b1']; ?></p>
                                                            <p><i class="fa fa-money"></i> Pem. kapal : Rp.<?php echo $row3['b2']; ?></p>
                                                        </div>
                                                    </div>
                                                </li>                                                       
                                               
                                    <?php $a++; }  //while ambil data transaksi1 ?>
                                    </ul>
                                   <?php } ?> 
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

    

