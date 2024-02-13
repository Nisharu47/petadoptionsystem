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
                <h4>Contact Us </h4>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Customer Name</th>
                        </tr>
                        {{-- @php($x = 1) --}}
                        @foreach ($list_data as $row)
                        <tr class="text-center">
                            <td>{{ $list_data->firstItem() + $loop->iteration -1 }}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->subject}}</td>
                            <td>{{$row->message}}</td>
                            @if (!$row->customer_id == null)
                            <td>{{$row->customer_fname}}</td>
                            @else
                            <td>No Name</td>
                            @endif

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
