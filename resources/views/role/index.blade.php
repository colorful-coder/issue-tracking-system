<x-app-layout>
    <div class="container mx-auto px-6 py-12">

        @if(session('success'))
        <div class="py-4 px-6 mb-3 bg-green-200 border-green-500 rounded-lg">
            {{ session('success') }}
        </div>
        @endif

        <div class="card">

            <div class="card-header">
                <h3 class="font-bold">Roles List</h3>
            </div>

            <div class="card-body">
                <a href="{{ route('role.create') }}" class="btn btn-primary">Create</a>

                <!-- Roles List -->
                <div class="mt-6 shadow overflow-hidden border-b border-gray-200 rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @forelse ($roles as $role)
                                
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $role->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $role->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $role->created_at->toFormattedDateString() }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('role.edit', $role->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <form action="{{ route('role.destroy', $role->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-600 hover:text-red-900 outline-none">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td class="p-6 text-gray-500 text-sm">No role.</td>
                                </tr>     
                            @endforelse

                        </tbody>
                    </table>
                </div>

                <div class="pagination mt-6">
                    {{ $roles->links() }}
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
