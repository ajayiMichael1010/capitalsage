<x-layout>

    <div class="max-w-4xl mx-auto mt-8 bg-white p-8 rounded-lg shadow-lg">
        <h2>{{$pageTitle}}</h2>
        <div class="flex items-center border-b border-teal-500 py-2 mt-8">
            <input id="bvnInput"
                   class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                   type="number" placeholder="Enter your BVN (11111111111 will be used if left blank)" minlength="11"
                   aria-label="Full name"  required>

            <button id="bvnVerifyButton"  type="button" class="custom-button-bg-primary flex sm:w-48 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 custom-button-bg-primary">
                @include('includes/spinner')
                Verify BVN
            </button>
        </div>
        <span class="custom-hint-text">Please use 11111111111 for testing</span>

        <div class="flex flex-col w-full mt-12">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" colspan="2"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    BVN VERIFICATION DETAILS
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200" id="bvnOwnerDetail">

                            <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>

@include('bvn.bvn-verification-javascript');
