<x-admin.layout>
    <x-slot name="header">
        Edit Skill: {{ $skill->name }}
    </x-slot>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Edit Skill Form -->
        <div class="lg:col-span-1 bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden h-fit">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Skill Details</h3>
            </div>
            <form action="{{ route('admin.skills.update', $skill) }}" method="POST" class="p-6 space-y-6">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Skill Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $skill->name) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <input list="categories" name="category" id="category" value="{{ old('category', $skill->category) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    <datalist id="categories">
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}">
                        @endforeach
                    </datalist>
                    @error('category') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Persona Tags -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Persona Tags</label>
                    <div class="flex flex-col gap-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="persona_tags[]" value="tech" {{ in_array('tech', old('persona_tags', $skill->persona_tags ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-persona-tech focus:ring-persona-tech">
                            <span class="ml-2 text-sm text-gray-700">Tech</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="persona_tags[]" value="management" {{ in_array('management', old('persona_tags', $skill->persona_tags ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-500">
                            <span class="ml-2 text-sm text-gray-700">Management</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="persona_tags[]" value="creative" {{ in_array('creative', old('persona_tags', $skill->persona_tags ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                            <span class="ml-2 text-sm text-gray-700">Creative</span>
                        </label>
                    </div>
                    @error('persona_tags') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="pt-4 flex items-center justify-end border-t border-gray-100">
                    <button type="submit" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors w-full">
                        Update Skill
                    </button>
                </div>
            </form>
        </div>

        <!-- Certifications -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Add Certification Form -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Add Certification for {{ $skill->name }}</h3>
                </div>
                <form action="{{ route('admin.skills.certifications.store', $skill) }}" method="POST" enctype="multipart/form-data" class="p-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Issuer</label>
                            <input type="text" name="issuer" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Issue Date</label>
                            <input type="date" name="issue_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Badge Image</label>
                            <input type="file" name="badge_image" accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:bg-indigo-50 file:text-indigo-700">
                        </div>
                    </div>
                    
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md shadow-sm transition-colors text-sm">
                            Add Certification
                        </button>
                    </div>
                </form>
            </div>

            <!-- Existing Certifications -->
            @if($skill->certifications->count() > 0)
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                    <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">Certifications</h3>
                    </div>
                    <ul class="divide-y divide-gray-200">
                        @foreach($skill->certifications as $cert)
                            <li class="p-6">
                                <form action="{{ route('admin.certifications.update', $cert) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="flex items-start gap-4">
                                        @if($cert->badge_image)
                                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded flex items-center justify-center p-1">
                                                <img src="{{ Storage::url($cert->badge_image) }}" class="max-w-full max-h-full object-contain">
                                            </div>
                                        @else
                                            <div class="flex-shrink-0 w-16 h-16 bg-gray-100 rounded flex items-center justify-center">
                                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                            </div>
                                        @endif
                                        
                                        <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label class="block text-xs font-medium text-gray-700">Name</label>
                                                <input type="text" name="name" value="{{ $cert->name }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-xs">
                                            </div>
                                            <div>
                                                <label class="block text-xs font-medium text-gray-700">Issuer</label>
                                                <input type="text" name="issuer" value="{{ $cert->issuer }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-xs">
                                            </div>
                                            <div>
                                                <label class="block text-xs font-medium text-gray-700">Issue Date</label>
                                                <input type="date" name="issue_date" value="{{ $cert->issue_date ? $cert->issue_date->format('Y-m-d') : '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-xs">
                                            </div>
                                            <div>
                                                <label class="block text-xs font-medium text-gray-700">Update Badge</label>
                                                <input type="file" name="badge_image" accept="image/*" class="mt-1 block w-full text-xs text-gray-500 file:mr-2 file:py-1 file:px-2 file:rounded file:border-0 file:text-xs file:bg-gray-100">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4 flex justify-end gap-2">
                                        <button type="button" onclick="if(confirm('Delete this certification?')) document.getElementById('delete-cert-{{ $cert->id }}').submit()" class="text-xs text-red-600 hover:text-red-900 px-3 py-1.5 font-medium">Delete</button>
                                        <button type="submit" class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-xs font-medium py-1.5 px-3 rounded shadow-sm transition-colors">Update</button>
                                    </div>
                                </form>
                                <form id="delete-cert-{{ $cert->id }}" action="{{ route('admin.certifications.destroy', $cert) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</x-admin.layout>
