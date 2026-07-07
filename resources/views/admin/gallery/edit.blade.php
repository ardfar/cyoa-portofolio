<x-admin.layout>
    <x-slot name="header">
        Edit Album: {{ $album->title }}
    </x-slot>

    <!-- Album Details Form -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden mb-8">
        <form action="{{ route('admin.gallery.update', $album) }}" method="POST" class="p-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">
                <div class="col-span-2">
                    <label for="title" class="block text-sm font-medium text-gray-700">Album Title</label>
                    <input type="text" name="title" id="title" value="{{ $album->title }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                </div>
                <div>
                    <label for="cover_photo_id" class="block text-sm font-medium text-gray-700">Cover Photo</label>
                    <select name="cover_photo_id" id="cover_photo_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                        <option value="">-- Select Cover --</option>
                        @foreach($album->photos as $p)
                            <option value="{{ $p->id }}" {{ $album->cover_photo_id == $p->id ? 'selected' : '' }}>
                                {{ $p->original_filename }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Photos metadata edit (optional if you want to edit all at once) -->
            @if($album->photos->count() > 0)
                <div class="mb-4">
                    <p class="text-sm font-medium text-gray-700 mb-2">Edit Captions</p>
                    <div class="max-h-60 overflow-y-auto border border-gray-200 rounded p-2 bg-gray-50 space-y-2">
                        @foreach($album->photos as $p)
                            <div class="flex gap-2 items-center bg-white p-2 rounded border border-gray-100">
                                <img src="{{ Storage::url($p->file_path) }}" class="h-10 w-10 object-cover rounded">
                                <input type="text" name="photos[{{ $p->id }}][caption]" value="{{ $p->caption }}" placeholder="Caption" class="flex-1 text-sm border-gray-300 rounded">
                                <input type="text" name="photos[{{ $p->id }}][alt_text]" value="{{ $p->alt_text }}" placeholder="Alt Text" class="flex-1 text-sm border-gray-300 rounded">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            
            <div class="flex justify-end">
                <button type="submit" class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium py-2 px-6 rounded-md shadow-sm transition-colors text-sm border border-gray-300">
                    Save Album Details
                </button>
            </div>
        </form>
    </div>

    <!-- Upload Photos Form -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden mb-8">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900">Upload Photos</h3>
        </div>
        <form action="{{ route('admin.gallery.photos.upload', $album) }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            
            <div>
                <input type="file" name="photos[]" multiple accept="image/*" required class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 border border-gray-300 rounded-md p-2">
                <p class="mt-2 text-xs text-gray-500">You can select multiple photos. Large files will be compressed.</p>
                @error('photos.*') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>
            
            <div class="mt-4 flex justify-end">
                <button type="submit" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors text-sm">
                    Upload Photos
                </button>
            </div>
        </form>
    </div>

    <!-- Photo Grid (Drag to Reorder) -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden" x-data="sortableGallery()">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h3 class="text-lg font-medium text-gray-900">Photos (Drag to reorder)</h3>
            <span x-show="saving" class="text-sm text-gray-500">Saving order...</span>
        </div>
        
        <div class="p-6">
            @if($album->photos->count() > 0)
                <ul id="sortable-list" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    @foreach($album->photos as $photo)
                        <li data-id="{{ $photo->id }}" class="relative group rounded-md overflow-hidden bg-gray-100 aspect-square cursor-move border border-transparent hover:border-persona-tech transition-colors">
                            <img src="{{ Storage::url($photo->file_path) }}" class="w-full h-full object-cover">
                            
                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all flex items-center justify-center opacity-0 group-hover:opacity-100">
                                <form action="{{ route('admin.gallery.photos.destroy', $photo) }}" method="POST" onsubmit="return confirm('Delete this photo?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white p-2 rounded-full hover:bg-red-700 shadow-md">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </div>
                            
                            @if($album->cover_photo_id == $photo->id)
                                <div class="absolute top-2 left-2 bg-persona-tech text-white text-[10px] font-bold px-2 py-0.5 rounded shadow">
                                    COVER
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-sm text-gray-500 text-center py-8">No photos yet.</p>
            @endif
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('sortableGallery', () => ({
                saving: false,
                init() {
                    const list = document.getElementById('sortable-list');
                    if (list) {
                        new Sortable(list, {
                            animation: 150,
                            onEnd: (evt) => {
                                this.saveOrder();
                            }
                        });
                    }
                },
                saveOrder() {
                    this.saving = true;
                    const items = document.querySelectorAll('#sortable-list li');
                    const order = Array.from(items).map(item => item.dataset.id);
                    
                    fetch('{{ route("admin.gallery.photos.reorder", $album) }}', {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ order: order })
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.saving = false;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        this.saving = false;
                        alert('Failed to save order.');
                    });
                }
            }));
        });
    </script>
    @endpush
</x-admin.layout>
