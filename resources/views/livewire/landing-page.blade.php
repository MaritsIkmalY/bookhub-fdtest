<div class="min-h-screen bg-gray-50">
    <!-- Navigation Header -->
    <nav class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.669 0-3.218.51-4.5 1.385V4.804z"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent">BookHub</span>
                </div>

                <!-- Search Bar -->
                <div class="flex-1 max-w-lg mx-8">
                    <div class="relative">
                        <input 
                            type="text" 
                            wire:model.live="search"
                            placeholder="Search Book, Author.." 
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                        >
                        <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 text-gray-700 hover:text-emerald-600 font-medium transition-colors">
                        <a wire:navigate href="{{ route('login') }}">
                            Sign In
                        </a>
                    </button>
                    <button class="px-6 py-2 bg-gradient-to-r from-emerald-500 to-blue-600 text-white rounded-lg hover:from-emerald-600 hover:to-blue-700 font-medium transition-all transform hover:scale-105">
                        <a wire:navigate href="{{ route('register') }}">
                            Sign Up
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-gradient-to-r from-emerald-500 to-blue-600 rounded-2xl overflow-hidden">
            <div class="px-8 py-12 lg:px-12 lg:py-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <!-- Left Content -->
                    <div class="text-white">
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-6 h-6 bg-opacity-20 rounded flex items-center justify-center">
                                <svg class="w-8 h-8  text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.669 0-3.218.51-4.5 1.385V4.804z"/>
                                </svg>
                            </div>
                            <span class="text-sm font-medium opacity-90">BookHub</span>
                        </div>
                        
                        <h1 class="text-4xl lg:text-5xl font-bold mb-4">
                            Learn Faster, Read More
                        </h1>
                        
                        <p class="text-lg mb-2 opacity-90">Textbooks, references, and summaries curated by our editorial teams</p>
                        <p class="text-base mb-8 opacity-80">Get smart recommendations, save notes, and pick up where you left off—anywhere.</p>
                        
                        <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-lg px-6 py-3 inline-block mb-6">
                            <span class="text-orange-200 font-bold text-xl">RP 99.000</span>
                        </div>
                        
                        <p class="text-base opacity-90">One Subscription for Unlimited Read</p>
                    </div>

                    <!-- Right Content - Book Images -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="relative">
                            <div class="bg-emerald-600 rounded-lg p-6 transform rotate-3 shadow-lg">
                                <div class="text-white text-center">
                                    <div class="text-2xl font-bold mb-2">Learning</div>
                                    <div class="text-sm opacity-80">Books</div>
                                </div>
                            </div>
                            <div class="absolute -top-4 -right-4 bg-blue-700 rounded-lg p-6 transform -rotate-6 shadow-lg">
                                <div class="text-white text-center">
                                    <div class="text-2xl font-bold mb-2">Learning</div>
                                    <div class="text-sm opacity-80">Books</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filters Section -->
    <section class="bg-white border-b border-gray-200 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-4 items-center">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    <span class="font-medium text-gray-700">Filter:</span>
                </div>

                <!-- Author Filter -->
                <select wire:model.live="filterAuthor" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                    <option value="">All Authors</option>
                    @foreach($this->authors as $author)
                        <option value="{{ $author }}">{{ $author }}</option>
                    @endforeach
                </select>

                <!-- Date Filter -->
                <select wire:model.live="filterDate" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                    <option value="">All Dates</option>
                    <option value="today">Today</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                </select>

                <!-- Rating Filter -->
                <select wire:model.live="filterRating" class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                    <option value="">All Rating</option>
                    <option value="5">5 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="2">2 Stars</option>
                    <option value="1">1 Stars</option>
                </select>

                <!-- Reset Button -->
                @if($search || $filterAuthor || $filterDate || $filterRating)
                    <button 
                        wire:click="clearFilters" 
                        class="px-4 py-2 text-gray-600 hover:text-red-600 border border-gray-300 rounded-lg hover:border-red-300 transition-colors"
                    >
                        Reset Filter
                    </button>
                @endif
            </div>
        </div>
    </section>

    <!-- Books Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Books</h2>
                <a href="#" class="text-emerald-600 hover:text-emerald-700 font-semibold flex items-center space-x-1">
                    <span>View All</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            @if($this->books->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                @foreach($this->books as $book)
                    <div class="group cursor-pointer">
                        <div class="relative rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                            @if($book->thumbnail)
                                <img 
                                    src="{{ Storage::url($book->thumbnail) }}" 
                                    alt="{{ $book->title }}"
                                    class="w-full h-64 object-cover"
                                >
                            @else
                                <div class="w-full h-64 bg-gradient-to-br from-gray-400 to-gray-600 flex items-center justify-center">
                                    <svg class="w-16 h-16 text-white/50" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Title overlay at bottom -->
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-4">
                                <h3 class="text-white font-bold text-sm leading-tight">{{ $book->title }}</h3>
                                @if($book->subtitle)
                                    <p class="text-white/80 text-xs mt-1">{{ $book->subtitle }}</p>
                                @endif
                            </div>
                            
                            <!-- Hover overlay -->
                            <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <div class="text-center space-y-3 text-white p-4">
                                    <div class="flex justify-center">
                                        @for($i = 1; $i <= 5; $i++)
                                            <svg class="w-4 h-4 {{ $i <= $book->rating ? 'text-yellow-400' : 'text-gray-400' }}" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                    <p class="text-sm">{{ $book->author }}</p>
                                    <button class="px-4 py-2 bg-white text-gray-900 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4 space-y-1">
                            <p class="text-sm text-gray-500">{{ $book->publisher ?? 'BookHub' }}</p>
                            <h4 class="font-semibold text-gray-900 group-hover:text-emerald-600 transition-colors">{{ $book->title }}</h4>
                            @if($book->description)
                                <p class="text-sm text-gray-600 line-clamp-2">{{ Str::limit($book->description, 100) }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $this->books->links('pagination::tailwind') }}
            </div>
            @else
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">No books found</h3>
                    <p class="mt-2 text-gray-500">Try changing your filters or search keywords.</p>
                </div>
            @endif
        </div>
    </section>
</div>
