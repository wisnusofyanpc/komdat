<?php

$sumber = "http://lk.bios.djpbn.kemenkeu.go.id/api/services/getReferensiAkunPengeluaran";
$konten = file_get_contents($sumber);
$data = json_decode($konten,TRUE);

//echo $data[1]["Kode"].'</br>';

//mengubah data jason

//echo count($data);

?>

<html>
    <head>
        <title>Data Referensi Pengeluaran</title>
    </head>
    
    <body>
        <table>
            <tr>
                <th>Kode</th><th>Uraian</th>
            </tr>
            
            <?php
            for ($a=0; $a < count($data); $a++){
               print " <tr>";
               print " <td>". $data[$a]["Kode"]. "</td>";
               print " <td>". $data[$a]["Uraian"]. "</td>";
                
                
            }
           
                
              ?>  
            </tr>
        </table>
        
    </body>
    
</html>


