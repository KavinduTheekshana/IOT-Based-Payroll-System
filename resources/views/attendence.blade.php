@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Attendence
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

                    <table class="table table-striped" style="padding:2rem;">
                            <thead>
                              <tr>
                                  <th></th>
                                  <th>01</th>
                                  <th>02</th>
                                  <th>03</th>
                                  <th>04</th>
                                  <th>05</th>
                                  <th>06</th>
                                  <th>07</th>
                                  <th>08</th>
                                  <th>09</th>
                                  <th>10</th>
                                  <th>11</th>
                                  <th>12</th>
                                  <th>13</th>
                                  <th>14</th>
                                  <th>15</th>
                                  <th>16</th>
                                  <th>17</th>
                                  <th>18</th>
                                  <th>19</th>
                                  <th>20</th>
                                  <th>21</th>
                                  <th>22</th>
                                  <th>23</th>
                                  <th>24</th>
                                  <th>25</th>
                                  <th>26</th>
                                  <th>27</th>
                                  <th>28</th>
                                  <th>29</th>
                                  <th>30</th>
                                  <th>31</th>
                              </tr> 
                            </thead>
                            <tbody>
                                    @foreach($profiles as $row)
                                    <tr>
                                      <td class="hidden-xs">{{$row->id}}</td>
                                      <td class="text-success"><i class="fas fa-circle"></i></td>
                                      
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
