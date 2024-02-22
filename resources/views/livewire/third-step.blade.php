<div class="bg-gray-800 p-8 rounded-lg max-w-lg mx-auto my-10">
    <!-- Progress Bar -->
    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
        <div class="bg-blue-600 h-2.5 rounded-full dark:bg-blue-500" style="width: 90%"></div>
        <div class="flex justify-between text-sm pt-4">
            <p class="ml-2 text-gray-300">Still learning ..</p>
            <p class="ml-2 text-gray-300">Ready to go!</p>
        </div>
    </div>
    <!-- Title Section -->
    <div class="text-center py-4">
        <p class="text-white text-2xl font-semibold">Great the user</p>
        <p class="text-gray-400 text-sm">Almost done, the last touches.</p>
    </div>
    <!-- Livewire Form -->
    <form wire:submit.prevent="submit">
        <!-- Input Fields -->
        <div class="mb-4">
            <div class="mb-4">
                <label for="messageHeadline" class="block text-white mb-2">Welcome Message Headline</label>
                <input type="text" id="messageHeadline" wire:model.defer="messageHeadline" placeholder="Welcome message headline" class="w-full p-4 rounded bg-gray-700 text-white placeholder-gray-400" />
                @error('messageHeadline') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            </div>

            <div class="mb-4">
                <label for="disclaimerNotice" class="block text-white mb-2">Disclaimer Notice</label>
                <input type="text" id="disclaimerNotice" wire:model.defer="disclaimerNotice" placeholder="Disclaimer notice" class="w-full p-4 rounded bg-gray-700 text-white placeholder-gray-400" />
                @error('disclaimerNotice') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            </div>

            <div class="mb-4">
                <label for="disclaimerDescription" class="block text-white mb-2">Disclaimer Description</label>
                <input type="text" id="disclaimerDescription" wire:model.defer="disclaimerDescription" placeholder="Disclaimer description" class="w-full p-4 rounded bg-gray-700 text-white placeholder-gray-400" />
                @error('disclaimerDescription') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            </div>

            <div class="mb-4">
                <label for="welcomeMessage" class="block text-white mb-2">Welcome Message</label>
                <input type="text" id="welcomeMessage" wire:model.defer="welcomeMessage" placeholder="Welcome message" class="w-full p-4 rounded bg-gray-700 text-white placeholder-gray-400" />
                @error('welcomeMessage') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-col justify-between items-center">
            <button type="submit" class="bg-orange-600 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded w-full">
                Next
            </button>
            <button type="button" wire:click="$emit('exitProcess')" class="text-gray-300 hover:underline w-full p-4">
                Exit process
            </button>
        </div>
    </form>
</div>