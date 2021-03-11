@extends('layouts.app')

<!-- $formato['titolo'] serve per quando andiamo a cliccare
sulle foto della pasta e sopra compare il titolo -->

@section ('title', $formaPasta['titolo'] . 'La Molisana')

@section('content')
<div class="container">
  <h1>{{$formaPasta['titolo']}}</h1>
</div>
<div class="scheda-prodotto">
  <img src="{{$formaPasta['src-h']}}" alt="pasta Molisana">
  <img src="{{$formaPasta['src-p']}}" alt="pasta Molisana">
</div>
@endsection
