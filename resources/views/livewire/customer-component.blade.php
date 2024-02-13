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
                </div>
            </div>
        </div>


    </div>

    <div class="col-12 col-md-12">
        <div class="card">
            <div class="p-4">
                <h4>Customer </h4>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Customer First Name</th>
                            <th>Customer First Name</th>
                            <th>Customer Mobile</th>
                            <th>Customer Email</th>
                            <th>Customer Address</th>
                            <th>Customer City</th>
                            <th>Actions</th>
                        </tr>
                        {{-- @php($x = 1) --}}
                        @foreach ($list_data as $row)
                        <tr class="text-center">
                            <td>{{ $list_data->firstItem() + $loop->iteration -1 }}</td>
                            <td>{{$row->customer_fname}}</td>
                            <td>{{$row->customer_lname}}</td>
                            <td>{{$row->customer_tp}}</td>
                            <td>{{$row->customer_email}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->city}}</td>

                            <td>

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
</div>
