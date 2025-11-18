<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Dashboard - Portfolio Management</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .cms-nav { background: #1f2937; }
        .cms-main { background: #f9fafb; min-height: 100vh; }
        .form-section { background: white; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .btn-primary { background: #3b82f6; color: white; padding: 8px 16px; border-radius: 4px; border: none; cursor: pointer; }
        .btn-primary:hover { background: #2563eb; }
        .btn-secondary { background: #6b7280; color: white; padding: 8px 16px; border-radius: 4px; border: none; cursor: pointer; }
        .btn-secondary:hover { background: #4b5563; }
        .btn-danger { background: #ef4444; color: white; padding: 8px 16px; border-radius: 4px; border: none; cursor: pointer; }
        .btn-danger:hover { background: #dc2626; }
        .form-group { margin-bottom: 16px; }
        .form-label { display: block; margin-bottom: 4px; font-weight: 500; color: #374151; }
        .form-input { width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 4px; font-size: 14px; }
        .form-input:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2); }
        .form-textarea { width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 4px; font-size: 14px; min-height: 100px; resize: vertical; }
        .form-textarea:focus { outline: none; border-color: #3b82f6; box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2); }
        .alert { padding: 12px 16px; border-radius: 4px; margin-bottom: 16px; }
        .alert-success { background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; }
        .alert-error { background: #fee2e2; color: #991b1b; border: 1px solid #fecaca; }
        .tabs { display: flex; border-bottom: 1px solid #e5e7eb; margin-bottom: 24px; }
        .tab { padding: 12px 24px; cursor: pointer; border-bottom: 2px solid transparent; }
        .tab.active { border-bottom-color: #3b82f6; color: #3b82f6; }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .project-card { background: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; padding: 16px; margin-bottom: 16px; }
        .project-title { font-weight: 600; color: #111827; margin-bottom: 8px; }
        .project-description { color: #6b7280; font-size: 14px; margin-bottom: 8px; }
        .project-technologies { display: flex; flex-wrap: wrap; gap: 4px; margin-bottom: 12px; }
        .tech-tag { background: #e0e7ff; color: #4338ca; padding: 2px 8px; border-radius: 12px; font-size: 12px; }
        .project-actions { display: flex; gap: 8px; }
    </style>
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <div class="cms-nav w-64 text-white">
            <div class="p-6">
                <h1 class="text-xl font-bold mb-8">Portfolio CMS</h1>
                <nav class="space-y-2">
                    <a href="#site-settings" class="block px-4 py-2 rounded hover:bg-gray-700" onclick="showTab('site-settings')">Site Settings</a>
                    <a href="#personas" class="block px-4 py-2 rounded hover:bg-gray-700" onclick="showTab('personas')">Personas</a>
                    <a href="#projects" class="block px-4 py-2 rounded hover:bg-gray-700" onclick="showTab('projects')">Projects</a>
                    <a href="#cache" class="block px-4 py-2 rounded hover:bg-gray-700" onclick="showTab('cache')">Cache</a>
                    <a href="{{ route('home') }}" class="block px-4 py-2 rounded hover:bg-gray-700" target="_blank">View Site</a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="cms-main flex-1">
            <div class="p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Dashboard</h2>

                <!-- Success/Error Messages -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Site Settings Tab -->
                <div id="site-settings" class="tab-content active">
                    <div class="form-section p-6">
                        <h3 class="text-lg font-semibold mb-4">Site Settings</h3>
                        <form action="{{ route('cms.update-site') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Site Title</label>
                                <input type="text" name="site_title" class="form-input" value="{{ $portfolioConfig['site']['title'] ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Site Description</label>
                                <textarea name="site_description" class="form-textarea" required>{{ $portfolioConfig['site']['description'] ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Site Keywords</label>
                                <input type="text" name="site_keywords" class="form-input" value="{{ $portfolioConfig['site']['keywords'] ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Site Author</label>
                                <input type="text" name="site_author" class="form-input" value="{{ $portfolioConfig['site']['author'] ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Contact Email</label>
                                <input type="email" name="contact_email" class="form-input" value="{{ $portfolioConfig['contact']['email'] ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Contact Phone</label>
                                <input type="text" name="contact_phone" class="form-input" value="{{ $portfolioConfig['contact']['phone'] ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Contact Address</label>
                                <textarea name="contact_address" class="form-textarea">{{ $portfolioConfig['contact']['address'] ?? '' }}</textarea>
                            </div>
                            <button type="submit" class="btn-primary">Update Site Settings</button>
                        </form>
                    </div>
                </div>

                <!-- Personas Tab -->
                <div id="personas" class="tab-content">
                    <div class="space-y-6">
                        @foreach($portfolioConfig['personas'] as $personaId => $persona)
                            <div class="form-section p-6">
                                <h3 class="text-lg font-semibold mb-4">{{ $persona['name'] }} Settings</h3>
                                <form action="{{ route('cms.update-persona', $personaId) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Headline</label>
                                        <input type="text" name="headline" class="form-input" value="{{ $persona['headline'] ?? '' }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-textarea" required>{{ $persona['description'] ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">SEO Title</label>
                                        <input type="text" name="seo_title" class="form-input" value="{{ $persona['seo']['title'] ?? '' }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">SEO Description</label>
                                        <textarea name="seo_description" class="form-textarea" required>{{ $persona['seo']['description'] ?? '' }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">SEO Keywords</label>
                                        <input type="text" name="seo_keywords" class="form-input" value="{{ $persona['seo']['keywords'] ?? '' }}" required>
                                    </div>
                                    <button type="submit" class="btn-primary">Update {{ $persona['name'] }} Settings</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Projects Tab -->
                <div id="projects" class="tab-content">
                    <div class="space-y-6">
                        @foreach($portfolioConfig['personas'] as $personaId => $persona)
                            <div class="form-section p-6">
                                <h3 class="text-lg font-semibold mb-4">{{ $persona['name'] }} Projects</h3>
                                
                                <!-- Existing Projects -->
                                @foreach($persona['projects'] as $index => $project)
                                    <div class="project-card">
                                        <div class="project-title">{{ $project['title'] }}</div>
                                        <div class="project-description">{{ $project['description'] }}</div>
                                        <div class="project-technologies">
                                            @foreach($project['technologies'] as $tech)
                                                <span class="tech-tag">{{ trim($tech) }}</span>
                                            @endforeach
                                        </div>
                                        <div class="project-actions">
                                            <button class="btn-secondary" onclick="editProject('{{ $personaId }}', {{ $index }})">Edit</button>
                                            <form action="{{ route('cms.remove-project', [$personaId, $index]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn-danger" onclick="return confirm('Are you sure?')">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Add New Project Form -->
                                <div class="mt-6 p-4 border border-gray-200 rounded">
                                    <h4 class="font-semibold mb-3">Add New Project</h4>
                                    <form action="{{ route('cms.add-project', $personaId) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" class="form-input" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-textarea" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Technologies (comma-separated)</label>
                                            <input type="text" name="technologies" class="form-input" placeholder="Laravel, Vue.js, MySQL" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Project Link</label>
                                            <input type="url" name="link" class="form-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">GitHub Link</label>
                                            <input type="url" name="github" class="form-input">
                                        </div>
                                        <button type="submit" class="btn-primary">Add Project</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Cache Tab -->
                <div id="cache" class="tab-content">
                    <div class="form-section p-6">
                        <h3 class="text-lg font-semibold mb-4">Cache Management</h3>
                        <p class="text-gray-600 mb-4">Clear the application cache to ensure changes are reflected immediately.</p>
                        <form action="{{ route('cms.clear-cache') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-secondary">Clear All Cache</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Remove active class from all tabs
            document.querySelectorAll('.tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Show selected tab content
            document.getElementById(tabName).classList.add('active');
            
            // Add active class to clicked tab
            event.target.classList.add('active');
        }

        function editProject(personaId, projectIndex) {
            // This would open a modal or redirect to an edit page
            alert('Edit functionality would be implemented here for ' + personaId + ' project ' + projectIndex);
        }
    </script>
</body>
</html>