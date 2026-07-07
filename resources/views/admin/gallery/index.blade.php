<x-admin.layout>
    <x-slot name="header">
        Gallery Albums
    </x-slot>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <!-- New Album Form -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Create Album</h3>
                </div>
                <form action="{{ route('admin.gallery.store') }}" method="POST" class="p-6">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Album Title</label>
                        <input type="text" name="title" id="title" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                        @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="w-full bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-md shadow-sm transition-colors text-sm">
                            Create Album
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Album List -->
        <div class="lg:col-span-3">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cover</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Album Details</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($albums as $album)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex-shrink-0 h-16 w-16 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center">
                                    @php
                                        $cover = $album->photos->firstWhere('id', $album->cover_photo_id) ?? $album->photos->first();
                                    @endphp
                                    @if($cover)
                                        <img class="h-16 w-16 object-cover" src="{{ Storage::url($cover->file_path) }}" alt="">
                                    @else
                                        <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm font-medium text-gray-900">{{ $album->title }}</div>
                                <div class="text-sm text-gray-500">{{ $album->slug }} &bull; {{ $album->photos->count() }} photos</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('admin.gallery.edit', $album) }}" class="text-persona-tech hover:text-indigo-900 mr-3">Manage</a>
                                <form action="{{ route('admin.gallery.destroy', $album) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this album and all its photos?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="px-6 py-10 text-center text-sm text-gray-500">
                                No albums found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.layout>
