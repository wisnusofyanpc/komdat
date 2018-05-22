<?php

$sumber = "http://bios.djpbn.kemenkeu.go.id/web_services/ref_indikator";
$konten = file_get_contents($sumber);
$data = json_decode($konten,TRUE);

//echo $data['ref_indikator'][0]['indikator'];

//echo $aa = count($data['ref_indikator']);

//mengubah data jason



?>

<html>
    <head>
        <title>Data Referensi Indikator</title>
    </head>
    
    <body>
        <table>
            <tr>
                <th>indikator</th><th>uraian</th><th>nmrumpun</th>
            </tr>
            
            <?php
            for ($a=0; $a < $aa=count($data['ref_indikator']); $a++){
               print " <tr>";
               print " <td>". $data["ref_indikator"][$a]["indikator"]. "</td>";
               print " <td>". $data["ref_indikator"][$a]["uraian"]. "</td>";
               print " <td>". $data["ref_indikator"][$a]["nmrumpun"]. "</td>";
                
                
            }
          
                
              ?>  
            </tr>
        </table>
        
    </body>
    
</html>


