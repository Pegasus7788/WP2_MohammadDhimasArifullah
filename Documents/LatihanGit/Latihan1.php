<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Model;
class Latihan1 extends Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }
    public function penjumlahan($n1, $n2)
    {
        $model = model(\App\Models\Model_latihan1::class);
        $hasil = $model->jumlah($n1, $n2);
        $data ['n1'] = $n1;
        $data ['n2'] = $n2;
        $data['hasil']= $hasil;
        return view("view-latihan.php", $data);
        // echo "Hasil Penjumlahan dari". $n1 ." + ". $n2." = ". $hasil;
    }
}
?>