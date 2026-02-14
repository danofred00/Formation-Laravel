@extends('layouts.dashboard')

@php
    $stats = [
        'posts' => [
            'value' => $posts,
            'color' => 'primary',
            'label' => 'Articles publiés'
        ]
    ];
@endphp

@section('content')
    <div>
        <h2>Bonjour {{ auth()->user()->name }},</h2>
        <p>Bienvenue sur votre dashboard !</p>
    </div>
    <div>
        @foreach ($stats as $key => $stat)
            <div class="card text-white bg-{{ $stat['color'] }} mb-3" style="max-width: 15rem;">
                <div class="card-header">{{ $stat['label'] }}</div>
                <div class="card-body">
                    <h3 class="card-title text-center">{{ $stat['value'] }}</h3>
                </div>
            </div>
        @endforeach
    </div>
@endsection
