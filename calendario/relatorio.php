<?php 
require_once 'vendor/autoload.php';
//referenciando o namespace da dompdf
use Dompdf\Dompdf;

$pdo = new PDO('mysql:host=localhost; dbname=banco_fcamara;', 'root', '');

$sql = $pdo->query('SELECT * FROM events');

$html ='<h1> Atividades do Calendário</h1>';
$html .= '<table border=1 width=100%>';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<td><center><b>Título da Atividade</td>';
$html .= '<td><center><b>Data de Início</td>';
$html .= '<td><center><b>Data de Término</td>';
$html .= '</tr>';
$html .= '</thead>';

while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
	$html .='<tbody>';
	$html .= '<tr><td>'.$linha['title'] .'</td>';
	$html .= '<td>'.$linha['start'] .'</td>';
	$html .= '<td>'.$linha['end'] .'</td></tr>';
	$html .='</tbody>';	
}
$html .='</table>';

//instancia da dompdf
 $dompdf = new Dompdf;
//converter o html
$dompdf->loadHtml($html);

//definir tamanho e orientação
$dompdf-> setPaper('A4', 'portrait');

//renderizar o html
$dompdf->render();

//enviar para o bowser

$dompdf->stream('relatorio.pdf', array('Attachment' =>false));



