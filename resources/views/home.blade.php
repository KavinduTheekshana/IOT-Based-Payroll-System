@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Employees
                        <div class="float-right"> <a href="{{ url('add') }}" role="button" class="btn btn-sm btn-primary btn-create">Add New</a></div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('statusdelete'))
                        <div class="alert alert-warning" role="alert">
                            {{ session('statusdelete') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered table-list">
                            <thead>
                              <tr>
                                  <th class="hidden-xs">ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Joined Date</th>
                                  <th>Job Type</th>
                                  <th>basic Salary</th>
                                  <th class="hidden-xs">Action</em></th>
                              </tr> 
                            </thead>
                            <tbody>
                                    @foreach($profiles as $row)
                                    <tr>
                                      <td class="hidden-xs">{{$row->id}}</td>
                                      <td>{{$row->firstname}}&nbsp&nbsp{{$row->lastname}}</td>
                                      <td>{{$row->email}}</td>
                                      <td>{{$row->joineddate}}</td>
                                      <td>{{$row->jobtype}}</td>
                                      <td>{{$row->basicsalary}}/=</td>
                                      <td>
                                        <a href="#" role="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        <a href="#" role="button" class="btn btn-success"><i class="fas fa-download"></i></a>
                                        <a href="deleteprofile/{{$row->systemid}}" role="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                          </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
