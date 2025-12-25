<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    public function kustomerlap()
    {
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Times','B',18);
        $pdf->SetFont('Times','B',14);
        $pdf->Cell(0,5,'LAPORAN DATA KUSTOMER',0,1,'C');
        $pdf->Cell(30,8,'',0,1);
        $pdf->SetFont('Times','B',9);
        $pdf->Cell(7,6,'NO',1,0,'C');
        $pdf->Cell(37,6,'NIK',1,0,'C');
        $pdf->Cell(37,6,'NAMA CUSTOMER',1,0,'C');
        $pdf->Cell(30,6,'TELP',1,0,'C');
        $pdf->Cell(45,6,'ALAMAT',1,1,'C');
        
        $i=1;
        $data = $this->db->get('kustomer')->result_array();
        foreach($data as $d){
            $pdf->SetFont('Times','B',9);
            $pdf->Cell(7,6,$i++,1,0);
            $pdf->Cell(37,6,$d['nik'],1,0);
            $pdf->Cell(37,6,$d['name'],1,0);
            $pdf->Cell(30,6,$d['telp'],1,0);
            $pdf->Cell(45,6,$d['alamat'],1,1);
        }
        
        $pdf->SetFont('Times','',10);
        $pdf->Output('laporan_customer.pdf', 'I');
    }

    public function headerlap()
    {
        $data['data'] = $this->db->get('kustomer')->result_array();
        $this->load->view('kustomer/report_header_only', $data);
    }

    public function kustomerfull()
    {
        $data['data'] = $this->db->get('kustomer')->result_array();
        $this->load->view('kustomer/report_kustomerfull', $data);
    }

    public function kustomerkustom()
    {
        $data['data'] = $this->db->get('kustomer')->result_array();
        $this->load->view('kustomer/report_kustomerkustom', $data);
    }

    // PENJUALAN
    public function penjualanlap()
    {
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Times','B',14);
        $pdf->Cell(0,7,'LAPORAN DATA PENJUALAN',0,1,'C');
        $pdf->Ln(3);
        $pdf->SetFont('Times','B',9);
        $pdf->Cell(7,6,'NO',1,0,'C');
        $pdf->Cell(28,6,'INVOICE',1,0,'C');
        $pdf->Cell(25,6,'TOTAL',1,0,'C');
        $pdf->Cell(25,6,'BAYAR',1,0,'C');
        $pdf->Cell(25,6,'KEMBALI',1,0,'C');
        $pdf->Cell(30,6,'TANGGAL',1,0,'C');
        $pdf->Cell(30,6,'ID KUSTOMER',1,0,'C');
        $pdf->Cell(28,6,'ID USER',1,1,'C');

        $pdf->SetFont('Times','B',9);
        $i = 1;
        $data = $this->db->get('penjualan')->result_array();
        foreach ($data as $d) {
            $pdf->Cell(7,6,$i++,1,0,'C');
            $pdf->Cell(28,6,$d['invoice'],1,0);
            $pdf->Cell(25,6,$d['total'],1,0);
            $pdf->Cell(25,6,$d['bayar'],1,0);
            $pdf->Cell(25,6,$d['kembali'],1,0);
            $pdf->Cell(30,6,$d['tanggal'],1,0,'C');
            $pdf->Cell(30,6,$d['kustomer_id'],1,0,'C');
            $pdf->Cell(28,6,$d['user_id'],1,1,'C');
            }
            $pdf->Output('laporan_penjualan.pdf', 'I');
    }
    public function penjualanheader()
    {
        $data['data'] = $this->db->get('penjualan')->result_array();
        $this->load->view('penjualan/report_header', $data);
    }
    public function penjualanfull()
    {
        $data['data'] = $this->db->get('penjualan')->result_array();
        $this->load->view('penjualan/report_full', $data);
    }
    public function penjualankustom()
    {
        $data['data'] = $this->db->get('penjualan')->result_array();
        $this->load->view('penjualan/report_kustom', $data);
    }

    //PEMBELIAN
    public function pembelianlap()
    {
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Times','B',14);
        $pdf->Cell(0,7,'LAPORAN DATA PEMBELIAN',0,1,'C');
        $pdf->Ln(3);
        $pdf->SetFont('Times','B',9);
        $pdf->Cell(7,6,'NO',1,0,'C');
        $pdf->Cell(28,6,'INVOICE',1,0,'C');
        $pdf->Cell(25,6,'TOTAL',1,0,'C');
        $pdf->Cell(25,6,'BAYAR',1,0,'C');
        $pdf->Cell(32,6,'DESKRIPSI',1,0,'C');
        $pdf->Cell(30,6,'TANGGAL',1,0,'C');
        $pdf->Cell(27,6,'ID SUPPLIER',1,0,'C');
        $pdf->Cell(24,6,'ID USER',1,1,'C');

        $pdf->SetFont('Times','B',9);
        $i = 1;
        $data = $this->db->get('pembelian')->result_array();
        foreach ($data as $d) {
            $pdf->Cell(7,6,$i++,1,0,'C');
            $pdf->Cell(28,6,$d['invoice'],1,0);
            $pdf->Cell(25,6,$d['total'],1,0);
            $pdf->Cell(25,6,$d['bayar'],1,0);
            $pdf->Cell(32,6,$d['deskripsi'],1,0);
            $pdf->Cell(30,6,$d['tanggal'],1,0,'C');
            $pdf->Cell(27,6,$d['supplier_id'],1,0,'C');
            $pdf->Cell(24,6,$d['user_id'],1,1,'C');
            }
            $pdf->Output('laporan_pembelian.pdf', 'I');
    }
    public function pembelianheader()
    {
        $data['data'] = $this->db->get('pembelian')->result_array();
        $this->load->view('pembelian/report_header', $data);
    }
    public function pembelianfull()
    {
        $data['data'] = $this->db->get('pembelian')->result_array();
        $this->load->view('pembelian/report_full', $data);
    }
    public function pembeliankustom()
    {
        $data['data'] = $this->db->get('pembelian')->result_array();
        $this->load->view('pembelian/report_kustom', $data);
    }

    //BARANG
    public function baranglap()
    {
        $pdf = new FPDF('p','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Times','B',14);
        $pdf->Cell(0,7,'LAPORAN DATA BARANG',0,1,'C');
        $pdf->Ln(3);
        $pdf->SetFont('Times','B',9);
        $pdf->Cell(7,6,'NO',1,0,'C');
        $pdf->Cell(28,6,'BARKODE',1,0,'C');
        $pdf->Cell(29,6,'NAMA',1,0,'C');
        $pdf->Cell(21,6,'SATUAN',1,0,'C');
        $pdf->Cell(28,6,'KATEGORI',1,0,'C');
        $pdf->Cell(26,6,'STOK',1,0,'C');
        $pdf->Cell(27,6,'HARGA BELI',1,0,'C');
        $pdf->Cell(27,6,'HARGA JUAL',1,1,'C');
    
        $pdf->SetFont('Times','B',9);
        $i = 1;
        $data = $this->db->get('barang')->result_array();
        foreach ($data as $d) {
            $pdf->Cell(7,6,$i++,1,0,'C');
            $pdf->Cell(28,6,$d['barcode'],1,0);
            $pdf->Cell(29,6,$d['name'],1,0);
            $pdf->Cell(21,6,$d['satuan_id'],1,0,'C');
            $pdf->Cell(28,6,$d['kategori_id'],1,0,'C');
            $pdf->Cell(26,6,$d['stok'],1,0,'C');
            $pdf->Cell(27,6,$d['harga_beli'],1,0,'C');
            $pdf->Cell(27,6,$d['harga_jual'],1,1,'C');
            }
            $pdf->Output('laporan_barang.pdf', 'I');
    }
    public function barangheader()
    {
        $data['data'] = $this->db->get('barang')->result_array();
        $this->load->view('barang/report_header', $data);
    }
    public function barangfull()
    {
        $data['data'] = $this->db->get('barang')->result_array();
        $this->load->view('barang/report_full', $data);
    }
    public function barangkustom()
    {
        $data['data'] = $this->db->get('barang')->result_array();
        $this->load->view('barang/report_kustom', $data);
    }

}
?>