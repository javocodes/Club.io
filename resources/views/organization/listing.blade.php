<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <!-- This is an example component -->
<div class="max-w-2xl mx-auto">

	<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
		<div class="p-4">
			{{-- <label for="table-search" class="sr-only">Search</label>
			<div class="relative mt-1">
				<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
					<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
							clip-rule="evenodd"></path>
					</svg>
				</div>
				<input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items"> --}}
        </div>
	</div>
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="px-6 py-3">
							Member ID
						</th>
						<th scope="col" class="px-6 py-3">
							Member Name
						</th>
						<th scope="col" class="px-6 py-3">
							Member DOB
						</th>
                        <th scope="col" class="px-6 py-3">
                            Member Position
                        </th>
						<th scope="col" class="px-6 py-3">
							Member Teams
						</th>
						<th scope="col" class="px-6 py-3">
							Member Since
						</th>
						<th scope="col" class="px-6 py-3">
							Member Status
						</th>
						<th scope="col" class="px-6 py-3">
							<span class="sr-only">Actions</span>
						</th>
					</tr>
				</thead>
				<tbody>
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    @foreach ($members as $member)
                                        <tr class=" border border-solid border-black">
                                        {{-- <th scope="col" class="px-6 py-3"> --}}
                                            <div class="">
                                                {{-- <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> --}}
                                                <td>TOAST-{{ $member->student_id }}</td>
                                            </div>
                                        {{-- </th> --}}
                                        <td>{{ $member->organization_id}}</td>
                                        {{-- <td>{{ $member->member_dob}}</td>
                                        <td>{{ $member->member_position }}</td>
                                        <td>{{ $member->member_teams }}</td>
                                        <td>{{ $member->created_at->toDateString() }}</td> --}}
                                        @if($member->status ===1)
                                            <td>Active</td>
                                        @else
                                            <td>Inactive</td>
                                        @endif
                                        <td>  <a href="/dashboard/members/edit" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark">Edit</a>
                                            <a href="/dashb" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="py-4 px-4">
                                    <a href="/dashboard/members/create">Create New Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
					{{-- <tr
						class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
						<td class="w-4 p-4">
							<div class="flex items-center">
								<input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
								<label for="checkbox-table-search-1" class="sr-only">checkbox</label>
							</div>
						</td>
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
							Apple MacBook Pro 17"
						</th>
						<td class="px-6 py-4">
							Sliver
						</td>
						<td class="px-6 py-4">
							Laptop
						</td>
						<td class="px-6 py-4">
							$2999
						</td>
						<td class="px-6 py-4 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
					<tr
						class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
						<td class="w-4 p-4">
							<div class="flex items-center">
								<input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
								<label for="checkbox-table-search-2" class="sr-only">checkbox</label>
							</div>
						</td>
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
							Microsoft Surface Pro
						</th>
						<td class="px-6 py-4">
							White
						</td>
						<td class="px-6 py-4">
							Laptop PC
						</td>
						<td class="px-6 py-4">
							$1999
						</td>
						<td class="px-6 py-4 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
					<tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
						<td class="w-4 p-4">
							<div class="flex items-center">
								<input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
								<label for="checkbox-table-search-3" class="sr-only">checkbox</label>
							</div>
						</td>
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
							Magic Mouse 2
						</th>
						<td class="px-6 py-4">
							Black
						</td>
						<td class="px-6 py-4">
							Accessories
						</td>
						<td class="px-6 py-4">
							$99
						</td>
						<td class="px-6 py-4 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
	</div> --}}
</x-app-layout>
