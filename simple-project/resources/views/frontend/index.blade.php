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
