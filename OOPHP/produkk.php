<?php

class Produk{
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    
    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Pro Evolution Soccer";
$produk4->penulis = "Naver";
$produk4->penerbit = "Konami";
$produk4->harga = "300000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel(); 
