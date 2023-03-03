@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->activation == 1 )
                        {{ __('You are logged in!') }}
                    @else
                        {{ __('Please wait, your account is going through activation process.') }}
                        {{ __('Try after some time. Thanks for your patience.') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
