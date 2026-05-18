@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">
    Daftar Lapangan
</h2>

<div class="grid grid-cols-3 gap-6">

@foreach($courts as $court)

<div class="bg-white p-6 rounded shadow">

    <h3 class="text-xl font-bold">
        {{ $court->name }}
    </h3>

    <p>
        {{ $court->location }}
    </p>

    <p>
        Rp {{ number_format($court->price_per_hour) }}
    </p>

</div>

@endforeach

</div>

@endsection