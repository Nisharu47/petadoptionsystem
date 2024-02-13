<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <form action="">
        <input type="text" name="customer_name" id="" placeholder="name" wire:model="customer_name">
        <input type="text" name="customer_email" id="" placeholder="email" wire:model="customer_email">
        <input type="text" name="customer_phone" id="" placeholder="phone" wire:model="customer_phone">
        <input type="text" name="customer_address" id="" placeholder="address" wire:model="customer_address">
        <button wire:click="save">Save</button>
    </form>
<br>
    <table>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Customer email</th>
            <th>Customer phone</th>
            <th>Customer address</th>
             <th>Actions</th>
        </tr>
        @foreach ($list_data as $item)   
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone_no}}</td>
            <td>{{$item->address}}</td>
            <td>
                <button wire:click="updateData({{$item->id}})">Edit</button>
                <button wire:click="DeleteData({{$item->id}})">Delete</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
