<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Invoice</title>
</head>
<body>
  <!-- resources/views/invoice.blade.php -->
  <h1>Invoice Pemesanan</h1>
  
  <p>Nama Lengkap: {{ $audience->nama }}</p>
  <p>Alamat Domisili: {{ $audience->alamat_domisili }}</p>
  <p>Nomor Whatsapp: {{ $audience->no_whatsapp }}</p>
  <p>Nomor tiket: {{ $audience->no_tiket }}</p>

  <br><hr>

  <p>Harga tiket: Rp 0,00</p>
  <p>Pajak tiket: Rp 0,00</p>
  <p><b>Total</b>: Rp 0,00</p>
</body>
</html>