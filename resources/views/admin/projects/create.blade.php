<x-admin.layout>
    <x-slot name="header">
        Add Project
    </x-slot>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Slug -->
                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700">Slug (optional, auto-generated if empty)</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm text-gray-500" placeholder="e.g., my-awesome-project">
                    @error('slug') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
                
                <!-- Persona -->
                <div>
                    <label for="persona" class="block text-sm font-medium text-gray-700">Persona</label>
                    <select name="persona" id="persona" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                        <option value="tech" {{ old('persona') === 'tech' ? 'selected' : '' }}>Tech</option>
                        <option value="management" {{ old('persona') === 'management' ? 'selected' : '' }}>Management</option>
                        <option value="creative" {{ old('persona') === 'creative' ? 'selected' : '' }}>Creative</option>
                    </select>
                    @error('persona') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <!-- Sort Order -->
                <div>
                    <label for="sort_order" class="block text-sm font-medium text-gray-700">Sort Order</label>
                    <input type="number" name="sort_order" id="sort_order" value="{{ old('sort_order', 0) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-persona-tech focus:ring-persona-tech sm:text-sm">
                    @error('sort_order') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <!-- Cover Image -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Cover Image (will be compressed to ≤ 1MB)</label>
                <input type="file" name="cover_image" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 border border-gray-300 rounded-md p-2">
                @error('cover_image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <!-- Options -->
            <div class="flex items-center">
                <input id="is_featured" name="is_featured" type="checkbox" value="1" {{ old('is_featured') ? 'checked' : '' }} class="h-4 w-4 rounded border-gray-300 text-persona-tech focus:ring-persona-tech">
                <label for="is_featured" class="ml-2 block text-sm text-gray-900">Featured Project (shows on Persona page)</label>
            </div>

            <!-- Body (TipTap Editor) -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Body Content</label>
                
                <!-- Alpine Component for TipTap -->
                <div x-data="editorComponent()" class="border border-gray-300 rounded-md overflow-hidden bg-white">
                    <div class="bg-gray-100 border-b border-gray-300 p-2 flex gap-2 items-center text-sm">
                        <button type="button" @click="editor.chain().focus().toggleBold().run()" :class="{ 'bg-gray-300': editor?.isActive('bold') }" class="px-2 py-1 rounded hover:bg-gray-200 font-bold">B</button>
                        <button type="button" @click="editor.chain().focus().toggleItalic().run()" :class="{ 'bg-gray-300': editor?.isActive('italic') }" class="px-2 py-1 rounded hover:bg-gray-200 italic">I</button>
                        <button type="button" @click="editor.chain().focus().toggleStrike().run()" :class="{ 'bg-gray-300': editor?.isActive('strike') }" class="px-2 py-1 rounded hover:bg-gray-200 line-through">S</button>
                        <span class="w-px h-4 bg-gray-300 mx-1"></span>
                        <button type="button" @click="editor.chain().focus().toggleHeading({ level: 2 }).run()" :class="{ 'bg-gray-300': editor?.isActive('heading', { level: 2 }) }" class="px-2 py-1 rounded hover:bg-gray-200 font-bold">H2</button>
                        <button type="button" @click="editor.chain().focus().toggleHeading({ level: 3 }).run()" :class="{ 'bg-gray-300': editor?.isActive('heading', { level: 3 }) }" class="px-2 py-1 rounded hover:bg-gray-200 font-bold">H3</button>
                        <span class="w-px h-4 bg-gray-300 mx-1"></span>
                        <button type="button" @click="editor.chain().focus().toggleBulletList().run()" :class="{ 'bg-gray-300': editor?.isActive('bulletList') }" class="px-2 py-1 rounded hover:bg-gray-200">• List</button>
                        <button type="button" @click="editor.chain().focus().toggleOrderedList().run()" :class="{ 'bg-gray-300': editor?.isActive('orderedList') }" class="px-2 py-1 rounded hover:bg-gray-200">1. List</button>
                    </div>
                    
                    <div x-ref="editor" class="p-4 min-h-[300px] prose max-w-none focus:outline-none focus:ring-0 cursor-text"></div>
                    <input type="hidden" name="body" :value="content" id="body-input">
                </div>
                @error('body') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
            </div>

            <div class="pt-4 flex items-center justify-end border-t border-gray-100">
                <a href="{{ route('admin.projects.index') }}" class="text-gray-500 hover:text-gray-700 font-medium px-4 py-2">Cancel</a>
                <button type="submit" class="bg-persona-tech hover:bg-indigo-600 text-white font-medium py-2 px-6 rounded-md shadow-sm transition-colors">
                    Save Project
                </button>
            </div>
        </form>
    </div>

    @push('scripts')
    <script type="module">
        import { Editor } from 'https://esm.sh/@tiptap/core';
        import StarterKit from 'https://esm.sh/@tiptap/starter-kit';
        import Link from 'https://esm.sh/@tiptap/extension-link';

        document.addEventListener('alpine:init', () => {
            Alpine.data('editorComponent', () => ({
                editor: null,
                content: document.getElementById('body-input').value,
                init() {
                    this.editor = new Editor({
                        element: this.$refs.editor,
                        extensions: [
                            StarterKit,
                            Link.configure({
                                openOnClick: false,
                            }),
                        ],
                        content: this.content,
                        onUpdate: ({ editor }) => {
                            this.content = editor.getHTML();
                        },
                        onSelectionUpdate: () => {
                            // Trigger reactivity for toolbar buttons
                            this.editor = this.editor; 
                        }
                    });
                }
            }));
        });
    </script>
    <style>
        .ProseMirror:focus {
            outline: none;
        }
        .ProseMirror > * + * {
            margin-top: 0.75em;
        }
        .ProseMirror h2 {
            font-size: 1.5em;
            font-weight: bold;
        }
        .ProseMirror h3 {
            font-size: 1.17em;
            font-weight: bold;
        }
        .ProseMirror ul {
            list-style-type: disc;
            padding-left: 1.5em;
        }
        .ProseMirror ol {
            list-style-type: decimal;
            padding-left: 1.5em;
        }
    </style>
    @endpush
</x-admin.layout>
