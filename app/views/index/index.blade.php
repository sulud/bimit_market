@extends('master')

@section('content')

<div class="it-container">

	<div class="it-wrapper-left">
	</div>
	
	<div class="it-wrapper">
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva">Software</div>
			<div class="it-box">
				{{ HTML::image('images/software.png',
                                               'Ponuda Ktegorije programa software') }}
			</div>
		</div>

		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box it-pcracunala">
				<h3>PC racunala</h3>
			</div>
		</div>
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box">
				<h3>PC komponente</h3>
			</div>
		</div>
	</div>

	<div class="it-wrapper">
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box it-prijenosna">
				<h3>Prijenosna racunala</h3>
			</div>
		</div>
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box it-infooprema">
				<h3>Informaticka oprema</h3>
			</div>
		</div>
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box it-tableti">
				<h3>Tablet racunala</h3>
			</div>
		</div>
	</div>

	<div class="it-wrapper">
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box">
				<h3>Mobiteli</h3>
			</div>
		</div>
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box it-audiovideo">
				<h3>Audio/video oprema</h3>
			</div>
		</div>
		<div class="it-mediumWrapper">
			<div class="it-labelaDiva"></div>
			<div class="it-box">
				<h3>Prijava/registracija</h3>
			</div>
		</div>
	</div>

</div>

@stop