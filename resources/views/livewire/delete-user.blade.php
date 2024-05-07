<div>
    <div class="flex justify-center items-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 class="text-2xl font-semibold text-center">Delete User</h2>
            <p class="text-center text-gray-500 mt-2">Are you sure you want to delete this user?</p>
            <div class="flex justify-center items-center gap-4 mt-6">
                <button wire:click="deleteUser({{ $userId }})"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Yes</button>
                <button wire:click="closeModal"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">No</button>
            </div>
        </div>
    </div>
</div>