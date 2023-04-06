@extends('layouts.app')
@section('card_content')
    <div class="row row-cols-4">
        @forelse ($trains as $train)
            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $train->stazione_partenza }}</h6>
                        <span class="card-text">{{ $train->stazione_arrivo }}</span>
                        <span>{{ $train->codice_treno }}</span>
                        <span>{{ $train->orario_partenza }}</span>
                        <span>{{ $train->orario_arrivo }}</span>
                    </div>
                </div>
            </div>
        @empty
            <h3>No movies found</h3>
        @endforelse
    </div>
@endsection
