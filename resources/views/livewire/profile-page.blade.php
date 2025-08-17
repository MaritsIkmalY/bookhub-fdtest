<div>
    @section('title', 'Profile')
<div class="min-h-screen bg-gray-900">
    <div class="max-w-4xl mx-auto p-6">
        <!-- Profile Header Section -->
        <div class="bg-gray-800 rounded-lg p-8 mb-6">
            <div class="flex flex-col items-center">
                <!-- Profile Avatar -->
                <div class="relative mb-4">
                    <div class="w-32 h-32 bg-gray-700 rounded-full flex items-center justify-center border-4 border-gray-600">
                        @if($user->avatar)
                            <img src="{{ $user->avatar }}" alt="Profile" class="w-full h-full rounded-full object-cover">
                        @else
                            <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        @endif
                    </div>
                </div>

                 @if($user->email_verified_at)
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Verified
                    </span>
                @else
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                        </svg>
                        Unverified
                    </span>
                @endif
                
            </div>
        </div>

        <!-- Profile Form Section -->
        <div class="bg-gray-800 rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-white mb-6">Data Profile</h2>
            
            <form wire:submit.prevent="updateProfile" class="space-y-6">
                <!-- Nama Lengkap Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                        Name
                    </label>
                    <input 
                        type="text" 
                        id="name"
                        wire:model="name"
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                        placeholder="Input your name"
                    >
                    @error('name')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email Field (Disabled) -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                        Email
                    </label>
                    <input 
                        type="email" 
                        id="email"
                        wire:model="email"
                        disabled
                        class="w-full px-4 py-3 bg-gray-600 border border-gray-500 rounded-lg text-gray-400 cursor-not-allowed opacity-75"
                        placeholder="Email can't be changed"
                    >
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button 
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-800"
                        wire:loading.attr="disabled"
                    >
                        <span wire:loading.remove>Update</span>
                        <span wire:loading>Saving...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


</div>