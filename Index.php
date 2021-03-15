First add dompdf library

<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$document=new Dompdf();
$html='
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Hello</h2>
</body>
</html>';
$document->loadHtml($html);
$document->setPaper('A4','landscape');
$document->render();
$document->stream("suman",array("Attachment"=>0));
?>
