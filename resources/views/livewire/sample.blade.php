<div>
    {{-- Success is as dangerous as failure. --}}
    <h1>thasbi</h1>

    <form action="">
        <input type="text" name="category" id="" placeholder="Category Name" wire:model="categoryName">
        <button wire:click="saveData">Save</button>
    </form>
<br>
    <table>
        <tr>
            <th>ID</th>
            <th>Category name</th>
            <th>Actions</th>
        </tr>
        @foreach ($list_data as $item)   
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->category_name}}</td>
            <td>
                <button wire:click="updateData({{$item->id}})">Edit</button>
                <button wire:click="deleteData({{$item->id}})">Delete</button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
