<div class="bg-gray-800 p-8 rounded-lg max-w-lg mx-auto my-10">
    <!-- Progress Bar -->
    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
        <div class="bg-blue-600 h-2.5 rounded-full dark:bg-blue-500" style="width: 60%"></div>
        <div class="flex justify-between text-sm pt-4">
            <p class="ml-2 text-gray-300">Still learning ..</p>
            <p class="ml-2 text-gray-300">Ready to go!</p>
        </div>
    </div>
    <!-- Title and Subtitle -->
    <div class="mb-6 flex flex-col items-center justify-center text-center pt-8">
        <p class="text-white text-xl font-semibold">Teach it what it needs to know</p>
        <p class="text-gray-400 text-sm pt-4">The more information you give to the webchat, the better its answers become.</p>
    </div>

    <!-- Livewire Form -->
    <form wire:submit.prevent="submit">
        <!-- Checkbox Options -->
        <div class="mb-4">
            <label class="flex justify-between items-center">
                <div>
                    <span class="ml-2 text-gray-300">Answer questions on documents</span>
                    <p class="text-gray-400 text-sm pt-4">Upload text documents and your webchat will be able to answer questions on those.</p>
                </div>
                <input type="checkbox" wire:model="answersSettings.documents" value="documents" class="form-checkbox  border-gray-700 bg-gray-900 rounded h-6 w-6">
            </label>
        </div>

        <div class="mb-6">
            <label class="flex justify-between items-center">
                <div>
                    <span class="ml-2 text-gray-300">Answer questions from websites</span>
                    <p class="text-gray-400 text-sm pt-4">Give your webchat websites, enabling it to respond to questions using that information.</p>

                </div>

                <input type="checkbox" wire:model="answersSettings.websites" value="websites" class="form-checkbox  border-gray-700 bg-gray-900 rounded h-6 w-6">

            </label>
        </div>

        <!-- Buttons -->
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