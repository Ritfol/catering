@extends('layouts.auth')

@section('content')

    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header" style="background-color: red;">
                    <h4 class="card-title text-center">
                        Registration form

                    </h4>
                    <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{ route('register') }}" method="POST" role="form">

                            {{ csrf_field() }}

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone number</label>
                                <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select name="location"  class="form-control" required="required">
                                    <option value="">--Select One--</option>
                                    <option value="posta">Posta</option>
                                    <option value="ud">University Area(Savei, Ardhi, UDSM)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Location Description</label>
                                <textarea name="description"  class="form-control" rows="3" required="required">{{ old('description') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <br><br>

    </div>

@endsection
