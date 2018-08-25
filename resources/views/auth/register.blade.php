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

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone number</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="">Location</label>
                                <select name="location"  class="form-control" required="required">
                                    <option value="null">--Select One--</option>
                                    <option value="">Posta</option>
                                    <option value="">University Area(Savei, Ardhi, UDSM)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Location Description</label>
                                <textarea name="description"  class="form-control" rows="3" required="required"></textarea>
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
