@extends('layouts.master')
@section('content')

<section class="content">
    <header class="content__title">
        <div class="page-head">
            <h1>Roles</h1>
            <small>Welcome to the unique Material Design admin web app experience!</small>
        </div>

        <div class="actions">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#add_role">Add New Role</a>
        </div>
    </header>



    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered">
                    <thead class="thead-default">
                        <tr>
                            <th>ID</th>
                            <th>Role Name</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td class="text-capitalize">{{$role->name}}</td>
                            <td>{{$role->updated_at->diffForHumans()}}</td>
                            <td>
                                <a href="" class="btn btn-light btn-sm btn--icon btn-table"><i class="zmdi zmdi-edit"></i></a>
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
<div class="modal fade" id="add_role" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{route('role.store')}}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Add User</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Role Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Admin">
                                <i class="form-group__bar"></i>
                            </div>

                             <div class="form-group">
                                <label>Role Permissions</label><br>
                                @foreach ($permissions as $permission)
                               <div class="checkbox">
                                    <input type="checkbox" id="{{$permission->id}}" name="role_permission[]" value="{{$permission->id}}">
                                    <label class="checkbox__label" for="{{$permission->id}}" >{{$permission->name}}</label>
                                </div>
                                @endforeach
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
