<x-admin.layout>
    <x-slot name="header">
        Edit Experience: {{ $experience->company }}
    </x-slot>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <form action="{{ route('admin.experiences.update', $experience) }}" method="POST" class="p-6 space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Company -->
                <div>
                    <label for="company" class="block text-sm font-medium text-gray-700">Company / Organization</label>
                    <input type="text" name="company" id="company" value="{{ old('company', $experience->company) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    @error('company') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Role -->
                <div>
                    <label for="role" class="block text-sm font-medium text-gray-700">Role / Title</label>
                    <input type="text" name="role" id="role" value="{{ old('role', $experience->role) }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    @error('role') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
                
                <!-- Start Date -->
                <div>
                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $experience->start_date ? $experience->start_date->format('Y-m-d') : '') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    @error('start_date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- End Date -->
                <div>
                    <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                    <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $experience->end_date ? $experience->end_date->format('Y-m-d') : '') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm text-gray-500">
                    <p class="mt-1 text-xs text-gray-500">Leave blank if currently working here.</p>
                    @error('end_date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">{{ old('description', $experience->description) }}</textarea>
                @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <!-- Persona Tags -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Persona Tags</label>
                <div class="flex gap-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="persona_tags[]" value="tech" {{ in_array('tech', old('persona_tags', $experience->persona_tags ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-persona-tech focus:ring-persona-tech">
                        <span class="ml-2 text-sm text-gray-700">Tech</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="persona_tags[]" value="management" {{ in_array('management', old('persona_tags', $experience->persona_tags ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-yellow-500 focus:ring-yellow-500">
                        <span class="ml-2 text-sm text-gray-700">Management</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="persona_tags[]" value="creative" {{ in_array('creative', old('persona_tags', $experience->persona_tags ?? [])) ? 'checked' : '' }} class="rounded border-gray-300 text-orange-500 focus:ring-orange-500">
                        <span class="ml-2 text-sm text-gray-700">Creative</span>
                    </label>
                </div>
                @error('persona_tags') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <!-- Sort Order -->
            <div class="w-1/2 md:w-1/4">
                <label for="sort_order" class="block text-sm font-medium text-gray-700">Sort Order</label>
                <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', $experience->sort_order) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                @error('sort_order') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 flex items-center justify-end border-t border-gray-100">
                <a href="{{ route('admin.experiences.index') }}" class="text-gray-500 hover:text-gray-700 font-medium px-4 py-2">Cancel</a>
                <button type="submit" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors">
                    Update Experience
                </button>
            </div>
        </form>
    </div>
</x-admin.layout>
