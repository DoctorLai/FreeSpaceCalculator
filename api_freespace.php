<?php
  $mhz = (float)($_GET['mhz'] ?? ($_POST['mhz'] ?? 0));
  $meter = (float)($_GET['meter'] ?? ($_POST['meter'] ?? 0));
  $gt = (float)($_GET['gt'] ?? ($_POST['gt'] ?? 0)); 
  $gr = (float)($_GET['gr'] ?? ($_POST['gr'] ?? 0));
  $data = array();
  $data['err'] = array();
  if ($mhz <= 0) {
    $data['err'][] = 'Frequency (MHz) Invalid';
  }
  if ($meter <= 0) {
    $data['err'][] = 'Distance (Meter) Invalid';
  }
  
  if (count($data['err']) == 0) {
    $data['db'] = 20.0 * log10($mhz * $meter * 0.001) + 32.44 - $gt - $gr;
  }
      
  header("Access-Control-Allow-Origin: *");  
  header('Content-Type: application/json');
  die(json_encode($data));  
