<?php 
if(!$this->session->userdata('id_admin') == 1)
{
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='http://localhost/Buku_pintar/admin/auth/';</script>";
  exit();
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

     <!-- favicon -->
    <!-- <link rel="shorcut icon" href="<?= base_url(); ?>assets/img/icon-layanan/e-laundry1.png"> -->

     <!-- datatables -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/DataTables/datatables.min.css"/>

  <!-- favicon -->
    <link rel="shorcut icon" href="<?= base_url(); ?>assets/img/icon.png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">