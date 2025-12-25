<?php 
$pdf = new FPDF('P','mm','A4'); 
$pdf->AddPage();  

$pdf->SetFont('Times','B',18); 
//$pdf->Image('./assets/img/cart.png',30,5,27,24); 
$pdf->Cell(25); 
$pdf->SetFont('Times','B',20); 
$pdf->Cell(0,5,'KOPERASI HARUM MANIS BERSATU',0,1,'C'); 
$pdf->Cell(25); 
$pdf->SetFont('Times','B',10); 
$pdf->Cell(0,5,'Website: WWW.HARUMBERSATU.COM / E-Mail: admin@harumbersatu.com',0,1,'C'); 
$pdf->Cell(25); 
$pdf->Cell(0,5,'Banjarmasin Utara Telp./Fax: 081349685149',0,1,'C'); 
$pdf->SetLineWidth(1); 
$pdf->Line(10,36,197,36); 
$pdf->SetLineWidth(0); 
$pdf->Line(10,37,197,37); 
$pdf->Cell(30,17,'',0,1); 

        $pdf->SetFont('Times','B',14);
        $pdf->Cell(0,7,'LAPORAN DATA PEMBELIAN',0,1,'C');
        $pdf->Ln(3);
        $pdf->SetFont('Times','B',9);
        $pdf->Cell(7,6,'NO',1,0,'C');
        $pdf->Cell(28,6,'INVOICE',1,0,'C');
        $pdf->Cell(25,6,'TOTAL',1,0,'C');
        $pdf->Cell(25,6,'BAYAR',1,0,'C');
        $pdf->Cell(28,6,'DESKRIPSI',1,0,'C');
        $pdf->Cell(30,6,'TANGGAL',1,0,'C');
        $pdf->Cell(27,6,'ID KUSTOMER',1,0,'C');
        $pdf->Cell(28,6,'ID USER',1,1,'C');

        $pdf->SetFont('Times','B',9);
        $i = 1;
        $data = $this->db->get('pembelian')->result_array();
        foreach ($data as $d) {
            $pdf->Cell(7,6,$i++,1,0,'C');
            $pdf->Cell(28,6,$d['invoice'],1,0);
            $pdf->Cell(25,6,$d['total'],1,0);
            $pdf->Cell(25,6,$d['bayar'],1,0);
            $pdf->Cell(28,6,$d['deskripsi'],1,0);
            $pdf->Cell(30,6,$d['tanggal'],1,0,'C');
            $pdf->Cell(27,6,$d['kustomer_id'],1,0,'C');
            $pdf->Cell(28,6,$d['user_id'],1,1,'C');
            }
            $pdf->Output('laporan_pembelian.pdf', 'I'); 
?>