<?php
include_once("banco1.php");

$arquivo = 'tbembalagem.xls';

$html = '<meta charset="UTF-8">';
$html .= '<table border="1">';
$html .= '<tr>';
$html .= '<td colspan="5">Relatorio EMBALAGEM</tr>';
$html .= '</tr>';

$html .= '<tr>';
$html .= '<td><b>id</b></td>';
$html .= '<td><b>descricao</b></td>';
$html .= '<td><b>material</b></td>';
$html .= '<td><b>quantidade</b></td>';
$html .= '</tr>';

//Selecionar os itens da tabela
$resultoexcel = "SELECT * FROM  tbembalagem";
$resultadoexcel = mysqli_query($conn, $resultoexcel);

while($rows_tbembalagem = mysqli_fetch_assoc($resultadoexcel)){
    $html .= '<tr>';
    $html .= '<td>'.$rows_tbembalagem["id"].'</td>';
    $html .= '<td>'.$rows_tbembalagem["material"].'</td>';
    $html .= '<td>'.$rows_tbembalagem["codigo"].'</td>';
    $html .= '<td>'.$rows_tbembalagem["quantidade"].'</td>';
    $html .= '</tr>';
    ;
}

 //Configurações header para forçar o download
 header ("Expires: Fri, 17 Apr 2020 16:50:00 GMT");
 header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
 header ("Cache-Control: no-cache, must-revalidate");
 header ("Pragma: no-cache");
 header ("Content-type: application/x-msexcel");
 header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
 header ("Content-Description: PHP Generated Data" );

 //Envia o conteúdo do arquivo
 echo $html;
 exit; ?>


?>