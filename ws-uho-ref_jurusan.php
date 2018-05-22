<?php

$sumber = "http://bios.djpbn.kemenkeu.go.id/web_services/ref_jurusan";
$konten = file_get_contents($sumber);
$data = json_decode($konten,TRUE);

//echo $data['ref_indikator'][0]['indikator'];

//echo $aa = count($data['ref_indikator']);

//mengubah data jason



?>

<html>
    <head>
        <title>Data Referensi Jurusan</title>
    </head>
    
    <body>
        <table>
            <tr>
                <th>kode_jurusan</th><th>nama_jurusan</th>
            </tr>
            
            <?php
            for ($a=0; $a < $aa=count($data['ref_jurusan']); $a++){
               print " <tr>";
               print " <td>". $data["ref_jurusan"][$a]["kode_jurusan"]. "</td>";
               print " <td>". $data["ref_jurusan"][$a]["nama_jurusan"]. "</td>";
            
                
                
            }
          
                
              ?>  
            </tr>
        </table>
        
    </body>
    
</html>


