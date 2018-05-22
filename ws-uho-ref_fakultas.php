<?php

$sumber = "http://bios.djpbn.kemenkeu.go.id/web_services/ref_fakultas";
$konten = file_get_contents($sumber);
$data = json_decode($konten,TRUE);

//echo $data['ref_indikator'][0]['indikator'];

//echo $aa = count($data['ref_indikator']);

//mengubah data jason



?>

<html>
    <head>
        <title>Data Referensi Fakutas</title>
    </head>
    
    <body>
        <table>
            <tr>
                <th>kode_fakultas</th><th>nama_fakultas</th>
            </tr>
            
            <?php
            for ($a=0; $a < $aa=count($data['ref_fakultas']); $a++){
               print " <tr>";
               print " <td>". $data["ref_fakultas"][$a]["kode_fakultas"]. "</td>";
               print " <td>". $data["ref_fakultas"][$a]["nama_fakultas"]. "</td>";
            
                
                
            }
          
                
              ?>  
            </tr>
        </table>
        
    </body>
    
</html>


