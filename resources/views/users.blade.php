@extends('layouts.dashboardmaster')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="card-header">user list</div>
        <div class="col-md-12 card-body">
           <table class="table table-bordered">
            <thead>
                <tr>
                    <th>sl</th>
                     <th>photo</th>
                    <th>name</th>
                     <th>email</th>
                    <th>phone number</th>
                     <th>date</th>
                </tr>
            </thead>
            <tbody>
                <div class="row input-group">
                    <div class="input-group search-area d-xl-inline-flex d-none">
						<div class="input-group-append">
							<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
						</div>
					<input type="text" class="form-control" placeholder="Search here...">
				</div>
               @foreach ($users as $user )

                <tr>
                    <td scope="row">{{ $loop->index+1}}</td>
                    <td>
                        <img src="{{ asset('uploads\profile_photo') }}/{{ $user->profile_photo }}" width="60">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                     <td>{{ $user->phn_number }}</td>

                      <td>{{ $user->created_at }}</td>

                </tr>
               @endforeach

            </tbody>
           </table>

        </div>
    </div>
</div>
@endsection
