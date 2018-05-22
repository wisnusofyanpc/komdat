<?php

$sumber = "http://bios.djpbn.kemenkeu.go.id/web_services/ref_akreditasi";
$konten = file_get_contents($sumber);
$data = json_decode($konten,TRUE);

//echo $data['ref_indikator'][0]['indikator'];

//echo $aa = count($data['ref_indikator']);

//mengubah data jason



?>

<html>
    <head>
        <title>Data Referensi Akreditasi</title>
    </head>
    
    <body>
        <table>
            <tr>
                <th>kode_akreditasi</th><th>nama_akreditasi</th>
            </tr>
            
            <?php
            for ($a=0; $a < $aa=count($data['ref_akreditasi']); $a++){
               print " <tr>";
               print " <td>". $data["ref_akreditasi"][$a]["kode_akreditasi"]. "</td>";
               print " <td>". $data["ref_akreditasi"][$a]["nama_akreditasi"]. "</td>";
            
                
                
            }
          
                
              ?>  
            </tr>
        </table>
        
    </body>
    
</html>


