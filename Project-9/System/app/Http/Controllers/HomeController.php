<?php

namespace App\http\Controllers;

class HomeController extends Controller {


    function showDashboard(){
        return view('admin.section.dashboard');
    }

    function showProduk(){
        return view('produk');
    }

    function showDiskon(){
        return view('diskon');
    }

    function showKategori(){
        return view('admin.section.kategori');
    }

    function showLogin(){
        return view('login');
    }

    function showSupplier(){
        return view('supplier');
    }

    function showPelanggan(){
        return view('pelanggan');
    }

    function test($produk ,$hargaMin="12" , $hargaMax ="10", ){
        if($produk == 'produk'){
            echo "Tampilan Produk Dress Wanita";
        }elseif($produk == 'baju'){
            echo "Produk Fashion";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";

    }

}