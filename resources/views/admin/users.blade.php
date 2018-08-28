@extends('layouts.admin')

@section('content')

    <div class="container" style="padding-top: 30px;">
        <div class="table-responsive-sm">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Enabled/Disabled</th>
                    <th scope="col">Delete user</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>07236457</td>
                    <td>mark@gmail.com</td>
                    <td>Posta</td>
                    <td>PPF Tower,Floor 8</td>
                    <td><button type="button" class="btn btn-outline-success">Enabled</button></td>
                    <td><button type="button" class="btn btn-outline-danger">Delete?</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>07236457</td>
                    <td>jacob@gmail.com</td>
                    <td>Posta</td>
                    <td>PPF Tower,Floor 7</td>
                    <td><button type="button" class="btn btn-outline-warning">Disabled</button></td>
                    <td><button type="button" class="btn btn-outline-danger">Delete?</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>07236457</td>
                    <td>larry@gmail.com</td>
                    <td>Posta</td>
                    <td>PPF Tower,Floor 9</td>
                    <td><button type="button" class="btn btn-outline-success">Enabled</button></td>
                    <td><button type="button" class="btn btn-outline-danger">Delete?</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>



    </div>

@endsection