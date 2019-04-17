@extends('layouts.master')
@section('content')

<section class="content">
    <header class="content__title">
        <div class="page-head">
            <h1>Users</h1>
            <small>Welcome to the unique Material Design admin web app experience! </small>
        </div>

        <div class="actions">
            @hasanyrole(Auth::user()->roles()->pluck('name')->implode(' '))
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add New User</a>
            @else
                I have none of these roles...
            @endhasanyrole
        </div>
    </header>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered">
                    <thead class="thead-default">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Email Verification</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                             <td>{{$user->roles()->pluck('name')->implode(' ')}}</td>
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                            <td>{{$user->updated_at->diffForHumans()}}</td>
                            <td>
                                @can('Edit Users')
                                <a href="" class="btn btn-light btn-sm btn--icon btn-table"><i class="zmdi zmdi-edit"></i></a>
                                @endcan
                                 <a href="" class="btn btn-light btn-sm btn--icon btn-table"><i class="zmdi zmdi-delete"></i></a>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</section>




<!-- Default -->
<div class="modal fade" id="modal-default" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{route('user.store')}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Add User</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="David Smith">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                                <i class="form-group__bar"></i>
                            </div>

                             <div class="form-group">
                                <label>Role</label>
                                <select class="select2" name="role">
                                    @foreach ($roles as $role)
                                             <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="+6 Characters">
                                <i class="form-group__bar"></i>
                            </div>





                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
