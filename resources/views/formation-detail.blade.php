<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Formations</title>
</head>
	
<body>
	<div id="imprime_moi">

		<div class="row">

			<div class="col-md-8 mx-14 my-4">	
			
				<span style="color:#e0542f; font-size:40px; font-weight:bold">
					<span style="font-size:24px; color:#ffc000">INFORMATIQUE</span><br><br>
					{{ $items->nom }}
				</span>
				
				<br>
				@foreach ($items->detail_formation as $item)
				<span style="color:#00424d; font-size:18px">{{ $item->niveau }},
				@endforeach

					Durée : {{ $items->duree }}</span>
				<br><br>

				@foreach ($items->detail_formation as $item)

@if (! is_null($items->date_debut))
				<td class="pl-0">{{ $items->date_debut }}</td>
				<td class="pl-52">{{ $items->date_fin }}</td>
				<td class="pl-80">{{ $items->lieux }}</td>
				
  
  

			  	

				<center><img src="https://imfpa.mq/traitrouge.png" width="239" height="11"></center>
				
				<span style="color:#538135; font-size:18px">Code Rome : {{ $item->rome }}</span><br>
				{{-- <span style="color:#006a7a; font-size:12px">Date dernière mise à jour : 14/01/2022</span><br><br> --}}
				
				<strong style="font-size:14px">
				
								
								
					</strong>
				
			
				<br><br>
				
						<h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Présentation du métier</h4>    
				<p style="text-align: justify;"><span style="color: rgb(67, 67, 67); font-size: 15px; white-space: pre-wrap;">{{ $item->presentation_du_metier }}</p>				
						<p>
				</p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Objectifs de la formation </h4>    
				<span style="font-size: 15px; white-space: pre-wrap; color: rgb(55, 58, 60);">{{ $item->objectifs_de_la_formation }}</span><p></p>
						
						<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Pré-Requis</h4>    
				<span style="color: rgb(0, 0, 0); font-size: 15px; white-space: pre-wrap;">{{ $item->prerequis }}</span><p></p>
						
						<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Aptitudes</h4>    
				<span style="color: rgb(0, 0, 0); font-family: &quot;Trebuchet MS&quot;; font-size: 15px; white-space: pre-wrap;">{{ $item->aptitudes }}</span><p></p>
						
						<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Programme de formation</h4>    
				<span style="color: rgb(32, 33, 36); font-size: 15px; font-weight: 700; white-space: pre-wrap;">{{ $item->programme }}</p>
						
				
				
				<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Certification</h4>  
				 <p></p><p>{{ $item->certification }}<br></p><p></p>  

				 
						<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Débouchés</h4>    
				<span style="color: rgb(32, 33, 36); font-size: 15px; white-space: pre-wrap;">{{ $item->debouches }}</span><p></p>
						
						<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Passerelles</h4>    
				<p style="text-align: justify;"><span style="color: rgb(0, 0, 0); font-size: 16px; white-space: pre-wrap;">{{ $item->passerelles }}</span></p><p></p>
						
						<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Equivalences</h4>    
				<br><p>{{ $item->equivalences }}</p>
				 
		
						<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Suite de parcours possibles</h4>    
				<p class="MsoNormal">{{ $item->suite_de_parcours_possibles }}</p><p></p>
				 
				
				
				<p></p><h4 style="color:#FFFFFF; background-color:#006a7a; padding:5px; width:300px">Périodes de la formation</h4>  

				@else


@endif ($formations->detail_formation as $detail)
						 
					<table class="border-2 mt-2 table-auto">
						<tbody>
						<tr class="border-b-2">
							<th class="pl-0">Date de Début</th>
							<th class="pl-52">Date de Fin</th>
							<th class="pl-80">Lieu</th>
						</tr>
						</tbody>

						<tbody>
							<tr class="">
							@if (! is_null($items->date_debut))
								<td class="pl-0">{{ $items->date_debut }}</td>
								<td class="pl-52">{{ $items->date_fin }}</td>
								<td class="pl-80">{{ $items->lieux }}</td>
							@else
				  
				  

  							@endif ($formations->detail_formation as $detail)

							</tr>							
						</tbody>

					</table><br><br><p></p>
		</div>
@endforeach
</html>