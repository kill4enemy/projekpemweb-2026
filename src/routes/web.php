<?php
use App\Models\Booking;
use App\Models\Court;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/courts', function () {
    return view('pages.courts');
});

Route::get('/booking', function () {
    $courts = \App\Models\Court::where('is_active', true)->get();

    return view('pages.booking', compact('courts'));
});

Route::post('/booking', function (Request $request) {

    Booking::create([
        'user_id' => 1, // sementara hardcode dulu

        'court_id' => $request->court_id,

        'booking_date' => $request->booking_date,

        'start_time' => $request->start_time,

        'end_time' => $request->end_time,

        'total_price' => 150000,

        'status' => 'pending',
    ]);

    return redirect('/booking')
        ->with('success', 'Booking berhasil dibuat');
});

Route::get('/courts', function () {

    $courts = \App\Models\Court::all();

    return view('pages.courts', compact('courts'));
});

Route::get('/diagram', function () {
    return view('pages.diagram');
});