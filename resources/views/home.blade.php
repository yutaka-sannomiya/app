@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>ようこそ{{ "$name" }}さん！</h1>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><a>{{ __('You are logged in!') }}</a></p>
                    <p><a href="/main">本日のkcal計算へ</a></p>

                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection
