<?php
                                        include"config.php";

                                        $sql="select sum(vol) from transaksi1 where tanggal = '111111'";
                                        $q=mysql_query($sql) or die(mysql_error());
                                        $counts=mysql_num_rows($q);
                                        if ($counts<>0){
                                            echo mysql_result($q, 0);
                                        }                                                                           
                                        
?>