@extends('master')

@section('content')

<div class="it-container">

    <div class="it-wrapper-mobiteli">
        <div class="it-wrapper-details">
            <h3>Racunala</h3>
            {{ HTML::ul(array("PC","Prijenosna","MAC","Tablet")) }}
        </div>
    </div>

    <div class="it-wrapper-pc">
        <div class="it-wrapper-details">
            <h3>Mobiteli</h3>
            {{ HTML::ul(array("Smartphone","Mobile","VoIP","Satellite","Kucni")) }}
        </div>
    </div>

    <div class="it-wrapper-laptop">
        <div class="it-wrapper-details">
            <h3>Komponente</h3>
            {{ HTML::ul(array("Harddrive","Motherboard","RAM")) }}
        </div>

    </div>

    <div class="it-wrapper-tableti">
        <div class="it-wrapper-details">
            <h3>Dodatna oprema</h3>
            {{ HTML::ul(array("Memory stick","Hladnjak","Ruter")) }}
        </div>

    </div>

</div>

@stop