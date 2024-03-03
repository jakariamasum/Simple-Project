<x-my-layout>
    <x-slot:title>
        My title
    </x-slot:title>
    <div class="py-3">
        <div class="container">
    <h1>Hello guys</h1>
    @php 
        $NewMessage="hello";
    @endphp
    <x-alertSuccess :message="$NewMessage"/>
    
        </div>
    </div>
    <x-slot:scripts>
        <script>
            alert('Hello')
        </script>
    </x-slot:scripts>

</x-my-layout>
