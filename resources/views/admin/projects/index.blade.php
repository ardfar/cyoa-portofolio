<x-admin.layout>
    <x-slot name="header">
        Projects
    </x-slot>

    <div class="mb-6 flex justify-between items-center">
        <div>
            <form method="GET" action="{{ route('admin.projects.index') }}" class="flex items-center gap-4">
                <select name="persona" class="rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm" onchange="this.form.submit()">
                    <option value="">All Personas</option>
                    <option value="tech" {{ request('persona') === 'tech' ? 'selected' : '' }}>Tech</option>
                    <option value="management" {{ request('persona') === 'management' ? 'selected' : '' }}>Management</option>
                    <option value="creative" {{ request('persona') === 'creative' ? 'selected' : '' }}>Creative</option>
                </select>
                @if(request('persona'))
                    <a href="{{ route('admin.projects.index') }}" class="text-sm text-gray-500 hover:text-gray-700">Clear filter</a>
                @endif
            </form>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-md shadow-sm transition-colors text-sm">
            Add Project
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Project</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Persona</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sort Order</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Featured</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($projects as $project)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10 bg-gray-100 rounded-md overflow-hidden flex items-center justify-center">
                                @if($project->cover_image)
                                    <img class="h-10 w-10 object-cover" src="{{ Storage::url($project->cover_image) }}" alt="">
                                @else
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                @endif
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{ $project->title }}</div>
                                <div class="text-sm text-gray-500">{{ $project->slug }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            {{ $project->persona === 'tech' ? 'bg-indigo-100 text-indigo-800' : '' }}
                            {{ $project->persona === 'management' ? 'bg-yellow-100 text-yellow-800' : '' }}
                            {{ $project->persona === 'creative' ? 'bg-orange-100 text-orange-800' : '' }}
                        ">
                            {{ ucfirst($project->persona) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ $project->sort_order }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($project->is_featured)
                            <span class="text-green-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            </span>
                        @else
                            <span class="text-gray-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('admin.projects.edit', $project) }}" class="text-persona-tech hover:text-indigo-900 mr-3">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this project?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-sm text-gray-500">
                        No projects found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="mt-4">
        {{ $projects->links() }}
    </div>
</x-admin.layout>
