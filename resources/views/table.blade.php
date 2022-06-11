@extends('layouts.layout')
@section('body')

<h3 class="text-dark mb-4">Team</h3>
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Employee Info</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-nowrap">
                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                            <option value="10" selected="">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>&nbsp;</label></div>
            </div>
            <div class="col-md-6">
                <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
            </div>
        </div>
        <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
            <table class="table my-0" id="dataTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>First_name</th>
                        <th>adresse</th>
                        <th>city</th>
                        <th>country</th>
                        <th>start_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="img/avatars/avatar{{ $user->id }}.jpeg">{{ $user->name }}</td>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->country}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach


                </tbody>
                <tfoot>
                    <tr>
                        <td><strong>Name</strong></td>
                        <td><strong>Position</strong></td>
                        <td><strong>Office</strong></td>
                        <td><strong>Age</strong></td>
                        <td><strong>Start date</strong></td>
                        <td><strong>Salary</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 align-self-center">
                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
            </div>
            <div class="col-md-6">
                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection
