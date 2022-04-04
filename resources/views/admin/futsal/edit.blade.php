@extends('adminetic::admin.layouts.app')

@section('content')
<x-adminetic-edit-page name="futsal" route="futsal" :model="$futsal">
    <x-slot name="content">
        {{-- ================================Form================================ --}}
        @include('admin.layouts.modules.futsal.edit_add')
        {{-- =================================================================== --}}
    </x-slot>
</x-adminetic-edit-page>
@endsection

@section('custom_js')
@include('admin.layouts.modules.futsal.scripts')
@endsection