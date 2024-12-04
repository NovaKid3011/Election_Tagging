@extends('layouts.admin.partials._head')


@section('content')

    <div class="content-wrapper">

        <button type="button" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add User
        </button>

        <div class="container mt-5 col-10 mx-5">
            <table class="table" id="usersTable">
                <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">email</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

    </div>





@endsection
