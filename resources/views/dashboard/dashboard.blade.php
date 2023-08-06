<x-layout>

    <div class="max-w-md mx-auto mt-12 bg-white p-8 rounded-lg shadow-lg">
        <div class="text-center">
            <h1 class="text-2xl font-semibold">{{Auth::user()->name}}</h1>
            <p class="mt-2 text-gray-600">Web Developer</p>
        </div>
        <div class="mt-6">
            <h2 class="text-lg font-semibold">Contact Information</h2>
            <ul class="mt-2 text-gray-700">
                <li class="flex items-center space-x-2">
                    <span>Email: {{Auth::user()->email}}</span>
                </li>
            </ul>
        </div>
    </div>

</x-layout>
