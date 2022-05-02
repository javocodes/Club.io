<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-center text-gray-800">
                {{ __('Quick Action Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{-- <div class="text-center"> @livewire('search-bar')</div> --}}
                       <div class="py-4 text-xl font-semibold leading-tight text-center text-gray-800">Members</div>
                        <table class="w-5/6 m-5 mx-auto text-gray-800 bg-gray-200 rounded-t-lg">
                            <tr class="text-left bg-blue-800 border-2 border-gray-800">
                                <th class="px-4 py-3 border-r-2 border-gray-800"> First Name </th>
                                <th class="px-4 py-3 border-r-2 border-gray-800 "> Last Name </th>
                                <th class="px-4 py-3 border-r-2 border-gray-800"> Address </th>
                                <th class="px-4 py-3 border-r-2 border-gray-800"> Phone Number </th>
                                <th class="px-4 py-3 border-r-2 border-gray-800"> Parish </th>
                                <th class="px-4 py-3 border-r-2 border-gray-800"> Cohort </th>
                                <th class="px-4 py-3 border-r-2 border-gray-800"> Email </th>
                                <th class="px-4 py-3 border-gray-300"> Action </th>
                            </tr>
                            <tbody>
                                {{-- @foreach ($students as $student )
                                <tr class="">
                                    <td class="px-4 py-3 border-2 border-gray-800"> {{$student->fname}} </td>
                                    <td class="px-4 py-3 border-2 border-gray-800"> {{$student->lname}} </td>
                                    <td class="px-4 py-3 border-2 border-gray-800"> {{$student->address}} </td>
                                    <td class="px-4 py-3 border-2 border-gray-800"> {{$student->phone_no}} </td>
                                    <td class="px-4 py-3 border-2 border-gray-800"> {{$student->parish}} </td>
                                    <td class="px-4 py-3 border-2 border-gray-800"> {{$student->cohort}} </td>
                                    <td class="px-4 py-3 border-2 border-gray-800"> {{$student->email}} </td>
                                    <td class="px-4 py-3 bg-green-500 border-2 border-gray-800"> <a href="{{route('student.edit', ['id'=>$student->id])}}"> Edit </a></td>
                                </tr>
                                @endforeach --}}
                            </tbody>

                        </table>
                    </div>
                   {{-- <div class="px-4 py-3"> {{ $students->links() }} </div> --}}
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
