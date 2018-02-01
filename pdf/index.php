<?php
    require __DIR__ . '/vendor/autoload.php';
    $db = new PDO('mysql:host=localhost;dbname=PDFoef;charset=utf8mb4', 'msahri', '');    $stmt = $db->query('SELECT * FROM PostalCode');
    $stmt = $db->query('SELECT * FROM PostalCode');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!--// php-->
<!--// class PDF extends FPDF-->
<!--//     {-->
<!--//         // Page header-->
<!--//         function Header()-->
<!--//         {-->
<!--//             // Logo-->
<!--//             $this->Image('logo.png',10,6,30);-->
<!--//             // Arial bold 15-->
<!--//             $this->SetFont('Arial','B',15);-->
<!--//             // Move to the right-->
<!--//             $this->Cell(80);-->
<!--//             // Title-->
<!--//             $this->Cell(30,10,'Postcodes',1,0,'C');-->
<!--//             // Line break-->
<!--//             $this->Ln(20);-->
<!--//         }-->
        
<!--//         // Page footer-->
<!--//         function Footer()-->
<!--//         {-->
<!--//             // Position at 1.5 cm from bottom-->
<!--//             $this->SetY(-15);-->
<!--//             // Arial italic 8-->
<!--//             $this->SetFont('Arial','I',8);-->
<!--//             // Page number-->
<!--//             $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');-->
<!--//         }-->
<!--//     }-->

<!--//     function firstPDF() {-->
<!--//         // Instanciation of inherited class-->
<!--//         $pdf = new PDF();-->
<!--//         $pdf->AliasNbPages();-->
<!--//         $pdf->AddPage();-->
<!--//         $pdf->SetFont('Times','',12);-->
<!--//         foreach($results as $item){-->
<!--//             $pdf->Cell(0,10,$item['PostalCode'], 0, 1);-->
<!--//             $pdf->Output('Postcodes.pdf', 'I');-->
<!--//         }-->
<!--//     }-->

<!--// >-->
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Postcodes</title>
</head>
<body>
    <a href=index.php?uc="pdf" target="_BLANK">Print PDF</a>
    <a href=simplemailsample.php target="_BLANK">Mail</a>
    <table>
    <?php
    foreach ($results as $item) { ?>
        <tr>
            <td><?php echo $item['PostalCode'];?></td>
            <td><?php echo $item['Plaatsnaam'];?></td>
            <td><?php echo $item['Provincie'];?></td>
            <td><?php echo $item['Localite'];?></td>
            <td><?php echo $item['Province'];?></td>
       </tr>
    <?php
    } ?>
    </table>
    
</body>
</html>