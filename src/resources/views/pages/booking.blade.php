@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">
    Booking Lapangan
</h2>

<div class="bg-white p-6 rounded shadow">

<form method="POST" action="/booking">

@if(session('success'))
    <div class="mb-4 bg-green-100 text-green-700 p-3 rounded">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@csrf

<div class="mb-4">
<label class="block mb-2">Pilih Lapangan</label>

<select name="court_id" class="w-full border p-2 rounded">

@foreach($courts as $court)

<option value="{{ $court->id }}">
{{ $court->name }}
</option>

@endforeach

</select>
</div>


<div class="mb-4">
<label class="block mb-2">Tanggal</label>

<input type="date" name="booking_date" class="w-full border p-2 rounded" required>
</div>


<div class="mb-4">
<label class="block mb-2">Jam</label>

<input type="time" name="start_time" class="w-full border p-2 rounded" required>
</div>

<div class="mb-4">
<label class="block mb-2">Jam Selesai</label>

<input type="time" name="end_time" class="w-full border p-2 rounded" required>
</div>


<button class="bg-blue-600 text-white px-6 py-2 rounded">
Booking
</button>

</form>

</div>

@endsection