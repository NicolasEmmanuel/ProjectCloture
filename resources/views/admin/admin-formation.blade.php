@extends('layouts.admin')

@section('content')
<!-- component -->
<div class="bg-white rounded-3xl px-8 py-8 m-14 pb-8 w-auto ">
	<div class=" flex items-center justify-between ">
		<div>
			<h2 class="text-gray-600 font-semibold">Formations proposées : {{ $formations->count() }}</h2>
		</div>
        <div class="flex justify-center mr-3">
            <a href="{{route('auth-formation-create')}}">
                <button
                    type="button"
                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                   <div class="flex flex-row items-center">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                    Ajouter une formation</div>
                  </button>
            </a>
            </div>
		</div>
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 pt-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Titre
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Filière
								</th>
                                <th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Validation
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Durée
								</th>
                                <th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									+ Détails 
								</th>
                                <th 
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Éditer
                                </th>
                                <th 
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Supprimer
                                </th>
							</tr>
						</thead>
@foreach ($formations as $formation)
						<tbody>
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex items-center">
											<div class="ml-3">
                                                <a href=""></a>
												<p class="text-gray-900 whitespace-no-wrap">
													{{ $formation->nom }}
												</p>
                                            </a>
											</div>
									</div>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">Informatique</p>
								</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{ $formation->niveau }}</p>
								</td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{ $formation->duree }}</p>
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a class=" flex flex-row" href="{{route('formation-detail', $formation->nom)}}">
                                        <p class="text-gray-900 whitespace-no-wrap pr-2 flex items-center">détails</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a href="{{route('auth-formation-edit', [$formation])}}">
                                        <button class="flex flex-row items-center justify-center border-green-500 bg-green-500 text-white rounded-md px-2 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline"
											formmethod="get">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                    </a>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
								<form action="{{route('auth-formation-delete', $formation)}}" method="POST">
									@csrf
                                        <button class="flex flex-row items-center justify-center border-red-500 bg-red-500 text-white rounded-md px-content px-2 py-2  transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline"
											type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
								</form>
                                </td>
							</tr>
						</tbody>
@endforeach
					</table>
				</div>
			</div>
		</div>

</div>

@endsection