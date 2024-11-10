<?php
if(!isset($_GET['barang']) and !isset($_GET['action'])){   
header('location:../../index.php');
 }elseif($_GET['modul']=="barang"){       
include "../../koneksi.php";
 if($_GET['action']=="tambah"){
 $Nama_Barang = $_POST['Nama_Barang'];
 $Harga = $_POST['Harga'];
 $Stok_Barang = $_POST['Stok_Barang'];
 $Kategori = $_POST['Kategori'];
 $query = "INSERT INTO barang (Nama_Barang, Harga, Stok_Barang, Kategori) VALUES (
  '$Nama_Barang',
  '$Harga',
  '$Stok_Barang',
  '$Kategori'
  )";
  $mysqli->query($query);
  header('location:../../index.php?modul=barang');
 }elseif($_GET['action']=="update"){    
  $Nama_Barang =$_POST['Nama_Barang'];
  $Harga =$_POST['Harga'];
  $Stok_Barang =$_POST['Stok_Barang'];
  $Kategori =$_POST['Kategori'];
  $query = "UPDATE barang SET 
        Nama_Barang='$Nama_Barang',
        Harga='$Harga',
        Stok_Barang='$Stok_Barang',
        Kategori='$Kategori'
        where id='$_GET[id]'
        ";
    $mysqli->query($query);
    header('location:../../index.php?modul=barang');
}elseif($_GET['action']=="delete"){        
       $query = "DELETE FROM barang WHERE id='$_GET[id]'";
        $mysqli->query($query);
        header('location:../../index.php?modul=barang');
     }else{
         header('location:../../index.php');     
    }
}