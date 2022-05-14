<x-guest-layout>
    <x-navbar/>
<table>
        <th>
            <tr class="border-2 border-black">
                <td class="border-2 border-black p-4;">Organization</td>
                <td class="border-2 border-black p-4">Description</td>
                <td class="border-2 border-black p-4">Category</td>
            </tr>
        </th>
        <tbody>
            @foreach ($organizations as $organization)
            <div>
                <tr class="border-2 border-black">
                    <td class="border-2 border-black">{{ $organization->name }} </td>
                    <td class="border-2 border-black">{{ $organization->description }} </td>
                    <td class="border-2 border-black">{{ $organization->category }} </td>
                </tr>
            </div>
            @endforeach
        </tbody>
 </table>


</x-guest-layout>
