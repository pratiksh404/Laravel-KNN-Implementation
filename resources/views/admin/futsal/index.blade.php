@extends('adminetic::admin.layouts.app')

@section('content')
<x-adminetic-index-page name="futsal" route="futsal">
    <x-slot name="content">
        {{-- ================================Card================================ --}}
        <table class="table table-striped table-bordered datatable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($futsals as $futsal)
                <tr>
                    <td>{{$futsal->name ?? 'N/A'}}</td>
                    <td>{{$futsal->address ?? 'N/A'}}</td>
                    <td>{{$futsal->phone ?? 'N/A'}}</td>
                    <td>{{$futsal->latitude ?? 'N/A'}}</td>
                    <td>{{$futsal->longitude ?? 'N/A'}}</td>
                    <td>
                        <x-adminetic-action :model="$futsal" route="futsal" />
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
        {{-- =================================================================== --}}
    </x-slot>
</x-adminetic-index-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.futsal.scripts')
@endsection