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
                <h4>Pets </h4>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Pet Name</th>
                            <th>Pet Species</th>
                            <th>Pet Age</th>
                            <th>Pet Gender</th>
                            <th>Pet Decription</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        {{-- @php($x = 1) --}}
                        @foreach ($list_data as $row)
                        <tr class="text-center">
                            <td>{{ $list_data->firstItem() + $loop->iteration -1 }}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->species}}</td>
                            <td>{{$row->age}}</td>
                            <td>{{$row->gender}}</td>
                            <td>{{$row->description}}</td>
                            <td>

                                @if($row->status==0)
                                <button class="btn btn-sm btn-success" wire:click="statusChangeModel('{{ $row->id }}','{{ $row->status }}')">
                                    Available
                                </button>
                                @elseif($row->status==1)
                                <button class="btn btn-sm btn-danger" wire:click="statusChangeModel('{{ $row->id }}','{{ $row->status }}')">
                                    Booked
                                </button>
                                @endif
                            </td>

                            <td>

                                <a href="#" class="text-info" wire:click="updateRecord({{ $row->id }})"><i class="fa fa-pen" aria-hidden="true"></i>
                                </a>

                                <a href="#" class="text-danger m-2" wire:click="deleteOpenModel({{ $row->id }})"><i class="fa fa-trash" aria-hidden="true"></i>
                                </a>

                                <a href="#" class="text-info mr-1" wire:click="openViewModel({{ $row->id }})">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
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
                        <label>Pet Name</label>
                        <input type="text" class="form-control" wire:model="pet_name" placeholder="Pet Name">
                        @error('pet_name')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Pet Species</label>
                        <input type="text" class="form-control" wire:model="pet_species" placeholder="Pet Species">
                        @error('pet_species')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Pet Age</label>
                        <input type="text" class="form-control" wire:model="pet_age" placeholder="Pet Age">
                        @error('pet_age')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label>Pet Gender</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" wire:model="pet_gender" value="male" id="male" checked>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" wire:model="pet_gender" value="female" id="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        @error('pet_gender')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Pet Photos</label>
                        <input type="file" wire:model="photos" multiple>
                        @error('photos')
                        <span class="text-danger text-sm">{{ $message }}</span>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label>Pet Description</label>
                        <textarea class="form-control" wire:model="pet_description" placeholder="Description"></textarea>
                        @error('pet_description')
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
    <div wire:ignore.self class="modal fade" id="status-model" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="formModal">Change Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" wire:model="status">
                                <option value="0">Available</option>
                                <option value="1">Booked</option>


                            </select>
                            @error('status')
                            <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" wire:click="closeStatusChangeModel" class="btn btn-success m-t-15 waves-effect">No </button>
                        <button type="button" wire:click="saveStatusChangeModel" class="btn btn-danger m-t-15 waves-effect">Yes</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade bd-example-modal-lg" id="view-model" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                @if (sizeOf($view) != 0)
                {{-- view function --}}
                <div class="modal-body">
                    <div class="row gutters-sm">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        @if ($view[0]->image != '')
                                    <img alt="image" src="{{ Storage::url($view[0]->file_name) }}" width="150px"
                                        height="150px " class="rounded-circle author-box-picture">
                                    @else
                                    <h2 class="text-center font-weight-bold">No<br>Image !</h2>
                                    @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-right">
                                <button type="button" wire:click="viewCloseModel" class="btn btn-danger m-t-15 waves-effect">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // this is for admin status
    window.addEventListener('status-show-form', event => {
        $('#status-model').modal('show');
    });
    window.addEventListener('status-hide-form', event => {
        $('#status-model').modal('hide');
    });

    // this is for view
    window.addEventListener('view-show-form', event => {
        $('#view-model').modal('show');
    });
    window.addEventListener('view-hide-form', event => {
        $('#view-model').modal('hide');
    });

</script>
