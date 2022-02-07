<?php

use Mpdf\Mpdf;

ob_start();
?>

<h1>Relátorio</h1>
<table boder="1" width="100%">
    <tr>
        <th>Nome do Cliente</th>
        <th>Valor do Pedido</th>
        <th>Data de Entrega</th>
    </tr>
    <tr>
        <td>Fernando</td>
        <td>R$ 1.000</td>
        <td>23/10/2022</td>

    </tr>
    <tr>
        <td>Fernando</td>
        <td>R$ 1.000</td>
        <td>23/10/2022</td>
        
    </tr>
    <tr>
        <td>Fernando</td>
        <td>R$ 1.000</td>
        <td>23/10/2022</td>
        
    </tr>
    <tr>
        <td>Fernando</td>
        <td>R$ 1.000</td>
        <td>23/10/2022</td>
        
    </tr>
    <tr>
        <td>Fernando</td>
        <td>R$ 1.000</td>
        <td>23/10/2022</td>
        
    </tr>
    
</table>

<?php

$html = ob_get_contents();
ob_end_clean();

require_once 'vendor/autoload.php';

$mpdf = new Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('arquivo.pdf','I');


//opções de Download
//I = abra no Browser
//D = faz o Download
//F = salva no Servidor
// https:;;mpdf.github.io/
?>

