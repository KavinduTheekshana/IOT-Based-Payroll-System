@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Employees
                        <div class="float-right"> <a href="{{ url('add') }}" role="button" class="btn btn-sm btn-primary btn-create ">Add New</a></div>
                        <div class="float-right"> <a href="{{ url('excel') }}" role="button" class="btn btn-sm btn-success btn-create mr-1">Download Excell</a></div>
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

                    @if (session('statusupdate'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('statusupdate') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered table-list" style="padding:.75rem;">
                            <thead style="padding:.75rem;">
                              <tr>
                                  <th style="padding:.75rem;">ID</th>
                                  <th style="padding:.75rem;">Name</th>
                                  <th style="padding:.75rem;">Email</th>
                                  <th style="padding:.75rem;">Joined Date</th>
                                  <th style="padding:.75rem;">Job Type</th>
                                  <th style="padding:.75rem;">basic Salary</th>
                                  <th style="padding:.75rem;">Action</em></th>
                              </tr> 
                            </thead>
                            <tbody>
                                    @foreach($profiles as $row)
                                    <tr>
                                      <td style="padding:.75rem;" class="hidden-xs">{{$row->id}}</td>
                                      <td style="padding:.75rem;">{{$row->firstname}}&nbsp&nbsp{{$row->lastname}}</td>
                                      <td style="padding:.75rem;">{{$row->email}}</td>
                                      <td style="padding:.75rem;">{{$row->joineddate}}</td>
                                      <td style="padding:.75rem;">{{$row->jobtype}}</td>
                                      <td style="padding:.75rem;">{{$row->basicsalary}}/=</td>
                                      <td style="padding:.75rem;">
                                        <a href="editprofile/{{$row->systemid}}" role="button" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        <a href="#" role="button" class="btn btn-success"><i class="fas fa-download"></i></a>
                                        <a href="deleteprofile/{{$row->systemid}}" role="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                      </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                          </table>

                          <nav aria-label="Page navigation example" class="float-right">
                                <ul class="pagination">
                                        {!! $profiles->links(); !!}
                                </ul>
                              </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
