<?php 

if (!function_exists('format_indo')) {
  function format_tanggal($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    // $Hari  = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
    $Bulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun  = substr($date,0,4);
    $bulan  = substr($date,5,2);
    $tgl    = substr($date,8,2);
    // $waktu  = substr($date,11,5);
    // $hari   = date("w",strtotime($date)); 
    // $Hari[$hari].", ." ".$waktu
    $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;

    return $result;
  }
}