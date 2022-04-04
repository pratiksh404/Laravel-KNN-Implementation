@extends('adminetic::admin.layouts.app')

@section('content')
<x-adminetic-create-page name="futsal" route="futsal">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.futsal.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-adminetic-create-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.futsal.scripts')
@endsection