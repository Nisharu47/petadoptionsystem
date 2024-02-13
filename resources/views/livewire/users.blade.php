<div>
    <div class="row">
        <div class="col-12 col-md-4">
        </div>

        <div class="col-12 col-md-8">

            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" wire:model="searchKey" wire:keyup="fetchData" placeholder="Search Customers Here..." aria-label="">
                    <div class="input-group-append">
                        <button class="btn btn-primary" wire:click="FetchData">Search</button>
                    </div>
                    <button id="formOpen" wire:click="openModel" class="btn btn-info ml-1"><i class="fa fa-plus" aria-hidden="true"></i> Create-New
                    </button>
                </div>
            </div>
        </div>


    </div>

    @if (session()->has('message'))
    <div x-transition.duration.500ms x-data="{open: true}" x-init="setTimeout(() => {open = false}, 1500) " x-show="open" class="alert alert-success" id="alert" style="height:40px">
        {{-- <button type="button" class="close btn btn-sm" data-dismiss="alert" style="margin-top: -7px">X</button>
        --}}
        <div style="margin-top: -3px"> {{ session('message') }} </div>
    </div>
    @endif

    <div class="col-12 col-md-12">
        <div class="card">
            <div class="p-4">
                <h4>Users </h4>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Type</th>
                            <th>Actions</th>
                        </tr>
                        {{-- @php($x = 1) --}}
                        @foreach ($list_data as $row)
                        <tr class="text-center">
                            <td>{{ $list_data->firstItem() + $loop->iteration -1 }}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->user_type}}</td>

                            <td>

                                <a href="#" class="text-info" wire:click="updateRecord({{ $row->id }})"><i class="fa fa-pen" aria-hidden="true"></i>
                                </a>

                                <a href="#" class="text-danger m-2" wire:click="deleteOpenModel({{ $row->id }})"><i class="fa fa-trash" aria-hidden="true"></i>
                                </a>

                            </td>
                        </tr>
                        {{-- @php($x++) --}}
                        @endforeach
                    </table>
                    <div class="row">
                        <div class="col-6 ml-2">
                            Showing {{$list_data->firstItem()}} - {{$list_data->lastItem()}} of {{$list_data->total()}}
                        </div>
                    </div>
                    <div class="float-right mr-3">
                        {{$list_data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="insert-model" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Create Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" wire:model="user_name" placeholder="User Name">
                        @error('user_name')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="Email" class="form-control" wire:model="user_email" placeholder="User Email">
                        @error('pet_species')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" wire:model="user_password" placeholder="Password">
                        @error('user_password')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" wire:model="user_confirm_password" placeholder="Confirm Password">
                        @error('user_confirm_password')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control" wire:model="user_type">
                            <option value="SuperAdmin">Super Admin</option>
                            <option value="Admin">Admin</option>


                        </select>
                        @error('user_type')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>




                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif

                    <div class="text-right">
                        <button type="button" wire:click="closeModel" class="btn btn-danger m-t-15 waves-effect">Close </button>
                        <button type="button" wire:click="saveData" class="btn btn-primary m-t-15 waves-effect">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
