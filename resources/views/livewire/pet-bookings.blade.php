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
                <h4>Pet Booking </h4>

            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tableExport">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Customer Name</th>
                            <th>Pet Name</th>
                            <th>Booking Date</th>
                            <th>Adoption Date</th>
                            <th>Status</th>

                        </tr>
                        {{-- @php($x = 1) --}}
                        @foreach ($list_data as $row)
                        <tr class="text-center">
                            <td>{{ $list_data->firstItem() + $loop->iteration -1 }}</td>
                            <td>{{$row->customer_fname}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->booking_date}}</td>
                            <td>{{$row->adoption_date}}</td>
                            <td>

                                @if($row->status==0)
                                <button class="btn btn-sm btn-success" wire:click="statusChangeModel('{{ $row->id }}','{{ $row->status }}')">
                                    Accepted
                                </button>
                                @elseif($row->status==1)
                                <button class="btn btn-sm btn-danger" wire:click="statusChangeModel('{{ $row->id }}','{{ $row->status }}')">
                                    Declined
                                </button>
                                @endif
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
                                <option value="0">Accepted</option>
                                <option value="1">Declined</option>


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
</script>
