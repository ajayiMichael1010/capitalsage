@if(session('success'))
    <div class="bg-orange-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
        <p class="font-bold">Successful</p>
        <p> {{ session('success') }}</p>
    </div>

@endif

@if(session('error'))
    <div class="bg-orange-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
        <p class="font-bold">Failed</p>
        <p> {{ session('error') }}</p>
    </div>

@endif

