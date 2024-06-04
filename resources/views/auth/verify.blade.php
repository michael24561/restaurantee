@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: #FFA500; color: white;">{{ ('Verifica tu dirección de correo electrónico') }}</div>

                <div class="card-body" style="background-color: #FFDAB9;">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ ('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                        </div>
                    @endif

                    {{ ('Antes de continuar, por favor verifica tu correo electrónico para obtener el enlace de verificación.') }}
                    {{ ('Si no recibiste el correo electrónico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="color: #FFA500;">{{ __('haz clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection