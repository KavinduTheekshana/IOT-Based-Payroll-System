@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add Employees</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form role="form" action="{{action('ProfileController@updateProfile')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if (count($errors) > 0)
                        <div style="padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem;
                          color:#721c24;background-color:#f8d7da;border-color:#f5c6cb;">
                        <strong>Whoops!</strong> There were some problems with your input.<br>
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif

                      
                        <div class="row"> 
                            <div class="col-md-3 mb-10">
                                <label for="ID">ID</label>
                                <input class="form-control" id="ID" value="{{$profile->id}}" type="text" name="id" readonly>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="firstName">First name</label>
                                <input class="form-control" id="firstName" value="{{$profile->firstname}}" type="text" name="firstname">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="lastName">Last name</label>
                                <input class="form-control" id="lastName" value="{{$profile->lastname}}" type="text" name="lastname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" value="{{$profile->email}}" type="email" name="email">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" value="{{$profile->address}}" type="text" name="address">
                        </div>

                    
                        <div class="row">
                        <div class="form-group col-md-4">
                            <label for="input_tags">Joined Date</label>
                            <input class="form-control" type="text" value="{{$profile->joineddate}}" name="joineddate">
                        </div></div>


                        <div class="row">
                            <div class="col-md-5 mb-10">
                                <label for="country">Job Type</label>
                                <select class="form-control custom-select d-block w-100" id="country"  name="jobtype">
                                    <option>{{$profile->jobtype}}</option>
                                    <option>UI/UX</option>
                                    <option>Developer</option>
                                    <option>Software Engineer</option>
                                    <option>Network Engineer</option>
                                </select>
                            </div>
                            <div class="col-md-3 mb-10">
                                <label for="Salary">Basic Salary</label>
                                <input class="form-control" id="" value="{{$profile->basicsalary}}" type="text" name="basicsalary">
                            </div>
                        </div>
                        

                        
                        <hr>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
