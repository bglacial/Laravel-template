@extends('layouts.form')
@section('card')
    @component('components.card')
        @slot('title')
            @lang('Ajouter une team')
        @endslot

    @endcomponent
@endsection
