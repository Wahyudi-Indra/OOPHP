<?php  

class Produk {
	public 	$judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "One Piece";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Mobile Lagend";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 100000;


$produk4 = new Produk();
$produk4->judul = "Mobile Lagend";
$produk4->penulis = "Jason Miraj";
$produk4->penerbit = "Android";
$produk4->harga = 100000;

echo "Komik :" . $produk3->getLabel();
echo "<br>";
echo "Game :" . $produk4->getLabel();