@extends('layouts.vertical', ['title' => 'Dashboard', 'sub_title' => 'Menu', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="grid 2xl:grid-cols-4 gap-6 mb-6">

    </div> <!-- Grid End -->


    <div class="grid 2xl:grid-cols-4 md:grid-cols-2 gap-6">
        <div class="2xl:col-span-2 md:col-span-2">
            <div class="card">


            </div>
        </div>

    </div> <!-- Grid End -->
@endsection

@section('script')
    @vite('resources/js/pages/dashboard.js')
@endsection
