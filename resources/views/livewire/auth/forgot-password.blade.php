<div>
    @section('title', 'Forgot Password')
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <!-- BookHub Logo -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-500 backdrop-blur-sm rounded-2xl mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-black text-black">BookHub</h1>
                <p class="text-black/80 text-sm mt-1">Reset your password</p>
            </div>
    
            <!-- Main Card -->
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 shadow-2xl border border-white/20">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-black mb-2">Forgot Password?</h2>
                    <p class="text-black/70 text-sm">Enter your email address and we'll send you a link to reset your password.</p>
                </div>
    
                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-6 p-4 bg-emerald-500/20 backdrop-blur-sm border border-emerald-400/30 rounded-2xl">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-emerald-300 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-emerald-100 text-sm">{{ session('success') }}</p>
                        </div>
                    </div>
                @endif
    
                <!-- Error Message -->
                @if (session('error'))
                    <div class="mb-6 p-4 bg-red-500/20 backdrop-blur-sm border border-red-400/30 rounded-2xl">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-red-300 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-red-100 text-sm">{{ session('error') }}</p>
                        </div>
                    </div>
                @endif
    
                <form wire:submit.prevent="sendResetLink" class="space-y-6">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-black mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-black/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                </svg>
                            </div>
                            <input wire:model="email" type="email" id="email"
                                class="w-full pl-12 pr-4 py-4 bg-white/10 backdrop-blur-sm border border-black/20 rounded-2xl text-black placeholder-black/50 focus:outline-none focus:ring-2 focus:ring-black/30 focus:border-transparent transition-all duration-200"
                                placeholder="Enter your email address">
                        </div>
                        @error('email') 
                            <p class="mt-2 text-sm text-red-300 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
    
                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-emerald-500 to-blue-600 hover:from-emerald-600 hover:to-blue-700 text-black font-semibold py-4 px-6 rounded-2xl transition-all duration-200 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-black/30 shadow-lg">
                        <span class="flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Send Reset Link
                        </span>
                    </button>
                </form>
    
                <!-- Back to Login -->
                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="text-black/70 hover:text-black text-sm font-medium transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Back to Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

