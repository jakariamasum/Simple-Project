<x-my-layout>
    <x-slot:title>
        Categories
    </x-slot:title>
    <div class="py-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Categories
                            <a href="{{url('categories/create')}}" class="btn btn-primary float-end">Add Category</a></h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Description</td>
                                    <td>Is Active</td>
                                    <td>Action</td>
                                </thead>
                                <tbody>
                                    @foreach($categories as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>{{$item->is_active==1?'Active':'In-active'}}</td>
                                        <td>
                                            <a href="{{url('categories/'.$item->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                            <a href="{{url('categories/'.$item->id.'/delete')}}" class="btn btn-danger mx-1">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-my-layout>
