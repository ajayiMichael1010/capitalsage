<x-layout>

    <div class="max-w-md mx-auto mt-8 bg-white p-8 rounded-lg shadow-lg">
        <h2>{{$pageTitle}}</h2>
        <div class="flex items-center border-b border-teal-500 py-2 mt-8">
            <input id="bvnInput"
                   class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                   type="text" placeholder="Enter your BVN (Test bvn will be used if left blank)"
                   aria-label="Full name">
            <button id="bvnVerifyButton"
                    class=" rounded-md bg-indigo-600 px-3 py-1.5 text-white shadow-sm hover:bg-indigo-500"
                    type="submit">
                Verify
            </button>
        </div>

        <div class="flex flex-col w-full mt-12">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Column 1 Header
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Column 2 Header
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
