<x-master>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Departments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-6">


                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden border-b border-gray-200">
                                @if($departments->count())
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Department Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Employees Number
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($departments as $department)
                                            <tr @if($loop->odd) class="bg-gray-100" @endif>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $department->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $department->slug }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium flex justify-between">
                                                    <a href="{{ route('department.edit', $department->slug )}}" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                                    <a href="{{ route('department.show', $department->slug )}}" class="text-indigo-600 hover:text-indigo-900 mr-2">View</a>
                                                    <form class="text-red-600 hover:text-red-500 mr-2" action="{{ route('department.destroy',$department->slug) }}" method="Post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                @else
                                    <div class="text-center text-md text-gray-500 py-4">No Department Found</div>
                                @endif
                                    <div class="py-4">
                                        {{ $departments->links() }}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-master>
