@extends('layouts.app')

@section('title', 'home page')


@section('content')
    @foreach ($trains as $train)
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text">{{ $train->azienda }}</p>
                    <p class="card-text">{{ $train->stazione_di_partenza }}</p>
                    <p class="card-text">{{ $train->stazione_di_arrivo }}</p>
                    <p class="card-text">{{ $train->orario_di_partenza }}</p>
                    <p class="card-text">{{ $train->codice_treno }}</p>
                    <p class="card-text">IN ORARIO: {{ $train->in_orario }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
