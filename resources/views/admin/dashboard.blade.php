<x-admin.layout>
    <x-slot name="header">
        Dashboard
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Stat Card 1 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 flex items-center">
            <div class="p-3 rounded-full bg-persona-tech/10 text-persona-tech mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Total Projects</p>
                <p class="text-3xl font-semibold text-gray-800">{{ $stats['projects'] }}</p>
            </div>
        </div>

        <!-- Stat Card 2 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 flex items-center">
            <div class="p-3 rounded-full bg-persona-mgmt/10 text-persona-mgmt mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Experiences</p>
                <p class="text-3xl font-semibold text-gray-800">{{ $stats['experiences'] }}</p>
            </div>
        </div>

        <!-- Stat Card 3 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Skills</p>
                <p class="text-3xl font-semibold text-gray-800">{{ $stats['skills'] }}</p>
            </div>
        </div>

        <!-- Stat Card 4 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 flex items-center">
            <div class="p-3 rounded-full bg-persona-art/10 text-persona-art mr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600">Gallery Photos</p>
                <p class="text-3xl font-semibold text-gray-800">{{ $stats['photos'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
        <h3 class="text-lg font-medium text-gray-800 mb-4">Welcome to the Admin Panel</h3>
        <p class="text-gray-600">Use the sidebar on the left to manage your portfolio content.</p>
    </div>
</x-admin.layout>
