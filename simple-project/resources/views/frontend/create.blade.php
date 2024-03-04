<x-my-layout>
    <x-slot:title>
        Add Categories
    </x-slot:title>
    <div class="py-3">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Categories
                            <a href="{{url('categories')}}" class="btn btn-primary float-end">Back</a></h4>
                        </div>
                        <div class="card-body">
                            <form action="{{url('categories/create')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}"/>
                                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="3">{{old('name')}}</textarea>
                                    @error('description') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Is Active</label>
                                    <input type="checkbox"  name="is_active" {{old('is_active')==true?checked:''}}/>
                                    @error('is_active') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot:scripts>
        <script>
            console.log('Hello')
        </script>
    </x-slot:scripts>

</x-my-layout>
