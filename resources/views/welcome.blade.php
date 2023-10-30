@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <img src="{{ asset('images/bizmates-logo.png') }}" class="logo" alt="">
        <div class="weather-details-container"></div>
        <div class="weather-details">
            <table class="table" width="100%">
                <tr>
                    <td colspan="3">
                        <img id="wicon" src="" class="img-thumbnail">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">Location</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td width="20px">:</td>
                    <td><span id="name"></span></td>
                </tr>
                <tr>
                    <td>Coordinates</td>
                    <td width="20px">:</td>
                    <td><span id="coordinates"></span></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">Weather</td>
                </tr>
                <tr>
                    <td>Weather</td>
                    <td>:</td>
                    <td><span id="weather"></span></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>:</td>
                    <td><span id="description"></span></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">Wind</td>
                </tr>
                <tr>
                    <td>Degrees</td>
                    <td>:</td>
                    <td><span id="wind-deg"></span></td>
                </tr>
                <tr>
                    <td>Speed</td>
                    <td>:</td>
                    <td><span id="wind-speed"></span></td>
                </tr>
                <tr>
                    <td>Gust</td>
                    <td>:</td>
                    <td><span id="wind-gust"></span></td>
                </tr>
            </table>

        </div>
        <div id="my-map"></div>
    </div>
</div>

@endsection