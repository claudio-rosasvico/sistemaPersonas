@extends('layouts.app', ['pageSlug' => 'home'])

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Bienvenid@ Compañer@!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Sistema creado por compañer@s para otr@ compañer@') }}
                        </p>
                        <div class="container">
                            <img src="{{ asset('assets/img/dedos_V.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
