@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top: 30px;">

        <div class="card" style="padding: 30px;" >

            <form action="" method="POST" role="form">
                <legend><b>Add images for tomorrow's meals</b></legend>
                <br>
                <div class="form-group">
                    <label for="">Breakfast</label>
                    <input type="text" placeholder="Name of meal" required>
                    <input type="file" name="image" required>
                </div>

                <div class="form-group">
                    <label for="">Lunch</label>
                    <input type="text" placeholder="Name of meal" required>
                    <input type="file" name="image2" required>
                </div>

                <div class="form-group">
                    <label for="">Dinner</label>
                    <input type="text" placeholder="Name of meal" required>
                    <input type="file" name="image3" required>
                </div>


                <div class="form-group">
                    <label for="">Drink</label>
                    <input type="text" placeholder="Name of drink" required>
                    <input type="file" name="image4" required>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        <!--------------end of card------------------------------------------------->

    </div>

@endsection