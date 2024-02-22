<div class="bg-gray-800 p-8 rounded-lg max-w-lg mx-auto my-10">
    <div class="flex flex-col items-center">
        <!-- Icon Wrapper -->
        <div class="bg-gray-700 p-4 rounded-full mb-4">
            <!-- Check Icon, you can replace it with an SVG or an icon font -->
            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>
        <!-- Text Content -->
        <p class="text-white text-lg font-semibold mb-2">You webchat is ready to go!</p>
        <p class="text-gray-400 text-sm mb-6">To be able to implement it with this bot, you have to add the script from the 'webchat' page to your header.</p>
        <!-- Button -->
        <a href="{{ route('dashboard') }}" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded inline-block text-center">
            Go to settings
        </a>

    </div>
</div>