@extends('layout.app')

@section('title', 'Human Plus Institute | Formulir')

@section('content')
    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 min-h-screen">
        <!-- content -->
        <div class="container mx-auto px-6 py-8">

            <!-- Form Container - Centered -->
            <div class="flex justify-center">
                <div class="w-full max-w-5xl">
                    @include('formulir.create')
                </div>
            </div>
        </div>
    </div>
@endsection