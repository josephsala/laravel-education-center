<div class="w-full overflow-auto rounded-2xl max-h-[34rem]">
    <table class="min-w-full divide-y divide-gray-300 border border-gray-300 rounded-lg">
        <thead class="bg-blue-100">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Name</th>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Email</th>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Role</th>
                <th scope="col"
                    class="px-6 py-3 text-center text-sm font-semibold text-blue-800 uppercase tracking-wider">Actions
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr class="hover:bg-yellow-100 transition-colors">
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-semibold">{{ $user['name'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">{{ $user['email'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm">{{ $user['role'] }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex gap-3 justify-center items-center">
                          
                            <button lwire:click="$dispatch('openModal', {component: 'update-user', user: {{ $user }} })"
                                class="text-blue-600 hover:text-blue-900">Edit</button>
                            <button wire:click="delete({{ $user['id'] }})"
                                class="text-red-600 hover:text-red-900">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>