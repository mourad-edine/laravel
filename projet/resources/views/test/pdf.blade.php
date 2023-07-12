<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <style>
        body,h2{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
<img src="{{asset('web/pngtree-paid-stamp-vector-illustration-png-image_6585127.png')}}" alt="" style="width: 180px;height: 180px;"> 
<br>
<br>
<p>factures</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nom prof</th>
      <th scope="col">prix/mois</th>
      <th scope="col">durée</th>
      <th scope="col">total</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $nom_prof }}</th>
      <td>{{ $prix_unit }} ar/mois</td>
      <td>{{ $dure }} mois</td>
      <td>{{ $ptotal }} ar</td>
      <td>le {{ $creation }}</td>
    </tr>
  </tbody>
</table> 
<strong>client : </strong>Mrs {{ $client->nom }}
<br>
<p></p>merci pour votre visite
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>