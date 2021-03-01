@extends('layouts.app')

@section('custom_css')
    <link rel="stylesheet" href="{{ asset("css/auth.css") }}">
@endsection

@section('title', 'Кабинет пользователя')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Кабинет пользователя</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Вы авторизованы
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
