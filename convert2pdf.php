<?php

// for display the post information

    // convert to PDF
    require_once('html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($_POST['content']);
        $html2pdf->Output('forms.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
//
//$client = $_POST['client'];
//$content = html_entity_decode($_POST['content']);
//require_once('html2pdf/html2pdf.class.php');
//$html2pdf = new HTML2PDF('P','A4','fr','true','UTF-8');
//$html2pdf->WriteHTML($content);
//ob_clean();
//$html2pdf->Output($client.'.pdf');
//// $html2pdf->Output('pdf/'.$client.'.pdf', 'F');
?>

