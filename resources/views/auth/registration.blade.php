<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://res.cloudinary.com/dg8z8uh8f/image/upload/v1691324438/htmaey7rpkty5zti0mvq.png"
                 alt="Your Company">
            <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{$pageTitle}}</h2>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
            @include("includes.message")

            <form class="space-y-6 nonAjaxForm" action="/register" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Full Name</label>
                    <div class="mt-2">
                        <input id="fullName" name="fullName" type="text" required value="{{ old('fullName') }}"
                               autocomplete="fullName"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('fullName')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required value="{{ old('email') }}"
                               autocomplete="email"
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required autocomplete="password"
                               class="password block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <span class="custom-hint-text" style="font-size: 0.7em;">Min:8, Upper case, Lower case, Number and Symbol</span>
                    </div>
                    @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="cPassword" class="block text-sm font-medium leading-6 text-gray-900">Confirm
                            Password</label>
                    </div>
                    <div class="mt-2">
                        <input id="confirmPassword" name="password_confirmation" type="password" required
                               autocomplete="confirmPassword" required
                               class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="text-red-500" id="passwordChecker"></div>
                </div>

                <div>
                    <button id = "registerButton" type="submit" class="flex w-full
                    justify-center rounded-md bg-indigo-600
                    px-3 py-1.5 text-sm font-semibold leading-6
                    text-white shadow-sm hover:bg-indigo-500
                    focus-visible:outline focus-visible:outline-2
                    focus-visible:outline-offset-2
                    focus-visible:outline-indigo-600 custom-button-bg-primary" disabled>
                        Register @include('includes/spinner')
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already a member?
                <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in</a>
            </p>
        </div>
    </div>

</x-layout>

