@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    @if (auth()->user()->is_patient == 0)
                    <a href="{{url('Patient/routes')}}">Patiente</a>
                    @endif
                    @if (auth()->user()->is_tutor == 0)
                    <a href="{{url('Tutor/routes')}}">Tutor</a>
                    @endif
                    @if (auth()->user()->is_admin == 0)
                    <a href="{{url('Admin/routes')}}">Admin</a>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
