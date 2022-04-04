@extends('adminetic::admin.layouts.app')

@section('custom_css')
<style>
    .map-container {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>
@endsection
@section('content')
<x-adminetic-show-page name="futsal" route="futsal" :model="$futsal">
    <x-slot name="content">
        <div class="row">
            <div class="col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <b>Name : </b> <span class="text-muted">{{$futsal->name ?? 'N/A'}}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Phone : </b> <span class="text-muted">{{$futsal->phone ?? 'N/A'}}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Address : </b> <span class="text-muted">{{$futsal->address ?? 'N/A'}}</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body shadow-lg p-3 bg-primary">
                                <b>Lalitide</b>
                                <br>
                                {{$futsal->latitude ?? 'N/A'}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body shadow-lg p-3 bg-primary">
                                <b>Longitude</b>
                                <br>
                                {{$futsal->longitude ?? 'N/A'}}
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                    <iframe src="{{$futsal->map ?? ''}}" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </x-slot>
</x-adminetic-show-page>

@endsection

@section('custom_js')
@include('admin.layouts.modules.futsal.scripts')
@endsection