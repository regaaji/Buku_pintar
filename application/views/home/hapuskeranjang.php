
<?php 
foreach($detail as $d) :
$id_produk = $d['id_produk'];
var_dump($id_produk);
endforeach;
unset($_SESSION['keranjang'][$id_produk]);

//redirect('home/keranjang');
echo "<script>alert('Produk dihapus dari keranjang');</script>";
echo "<script>window.location.href='http://localhost/Buku_pintar/home/index';</script>";

 ?>
 