@extends('layouts.app1')

@section('title')
Profile
@endsection

@section('content')
<section class="content">
    <div class="">
        <div class="row">
            <div class="col-md-3">

                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img style="width: 200px;" class="profile-user-img img-fluid img-circle" src="{{ asset('img/avatar.jpg') }}" alt="{{ auth()->user()->name . ' Photo' }}">


                        </div>

                        <h3 class="profile-username text-center" style="text-transform: uppercase">{{ auth()->user()->name }} </h3>
                        {{--  <p class="text-muted text-center">{{ auth()->user()->role }}</p>  --}}
                        <p class="text-muted text-center">{{ auth()->user()->email }}</p>
                        <p class="text-muted text-center">{{ auth()->user()->phone }}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item shadow mb-3 mr-2">
                        <a class="nav-link active" id="account-details-tab" data-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Account Details</a>
                      </li>
                      <li class="nav-item shadow mb-3 mr-2">
                        <a class="nav-link" id="login-details-tab" data-toggle="tab" href="#login-details" role="tab" aria-controls="login-details" aria-selected="false">Login Details</a>
                      </li>
                       <li class="nav-item shadow mb-3 mr-2">
                        <a class="nav-link" id="pay-details-tab" data-toggle="tab" href="#pay-details" role="tab" aria-controls="pay-details" aria-selected="false">Bank Account Details</a>
                      </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content mt-3 mx-0">
                        <div class="tab-pane active" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                <form class="form-horizontal" method="POST" action="{{ route('/dashboard/postprofile',$user->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name"  id="name" class="form-control @error('email') is-invalid @enderror" value="{{$user->name}}" required placeholder="Name">

                                            </div>

                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input type="email" name="email"  id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" placeholder="E-mail Address">

                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" value="{{ $user->phone }}" required>

                                            </div>


                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Update Profile</button>
                                                {{--  <a role="button" href="admin/index.html" class="bizwheel-btn theme-2">Login</a>  --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane" id="login-details" role="tabpanel" aria-labelledby="login-details-tab">
                                <form class="form-horizontal" method="POST" action="{{ route('/dashboard/updatelogin',$user->id) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Email</label>
                                                <input type="email" name="email"  id="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" required placeholder="Name" disabled>

                                            </div>

                                            <div class="form-group">
                                                <label for="email">New Password</label>
                                                <input type="pasword" name="password"  id="password" class="form-control" value="" placeholder="New password">

                                            </div>

                                            <div class="form-group">
                                                <label for="phone">Password_confirmation</label>
                                                <input type="text" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="password_confirmation" value="" required>

                                            </div>


                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Update Login</button>
                                                {{--  <a role="button" href="admin/index.html" class="bizwheel-btn theme-2">Login</a>  --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- Tab panes -->



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
