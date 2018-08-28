@extends('layouts.auth')

@section('content')

    <br><br>
    <div class="row">
        <div class="col"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: red;">
                    <h4 class="card-title text-center">
                        Login Form

                    </h4>
                    <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('login') }}" method="POST" role="form">

                            {{ csrf_field() }}

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="phone_number">Phone number</label>
                                <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>

@endsection
