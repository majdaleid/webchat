<div class="bg-gray-800 p-8 rounded-lg max-w-lg mx-auto my-10">
    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
        <div class="bg-blue-600 h-2.5 rounded-full dark:bg-blue-500" style="width: 30%"></div>
        <div class="flex justify-between text-sm pt-4">
            <p class="ml-2 text-gray-300">Still learning ..</p>
            <p class="ml-2 text-gray-300">Ready to go!</p>

        </div>
    </div>
    <div class="mb-6 flex flex-col items-center justify-center text-center pt-8">
        <p class="text-white text-xl font-semibold">Create your webchat</p>
        <p class="text-gray-400 text-sm pt-4">Get it done in 2 minutes, fill the data below so the webchat could understand your needs and fulfill them.</p>
    </div>



    <form wire:submit.prevent="submit">
        <div class="mb-4">
            <label for="goal" class="text-white font-semibold mb-2 block">Goal</label>
            <input type="text" id="goal" wire:model="goal" placeholder="Describe what the webchat should do" class="w-full p-2 rounded border border-gray-700 bg-gray-700 text-white" />
            @error('goal') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <p class="text-white font-semibold mb-2">What data you want to collect?</p>
            <div class="flex flex-col space-y-2">
                <label class="inline-flex items-center pt-2">
                    <input type="checkbox" wire:model="collect.phone_number" value="phone_number" class="form-checkbox text-indigo-600 border-gray-700 bg-gray-600 rounded">
                    <span class="ml-2 text-gray-300">Phone number</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="collect.name" value="name" class="form-checkbox text-indigo-600 border-gray-700 bg-gray-600 rounded">
                    <span class="ml-2 text-gray-300">Name</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="collect.email" value="email" class="form-checkbox text-indigo-600 border-gray-700 bg-gray-600 rounded">
                    <span class="ml-2 text-gray-300">Email</span>
                </label>
            </div>
        </div>

        <div class="flex flex-col justify-between items-center">
            <button type="submit" class="bg-orange-600 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded w-full">
                Next
            </button>
            <button type="button" class="text-gray-300 hover:underline w-full p-4">Exit process</button>
        </div>
    </form>
</div>