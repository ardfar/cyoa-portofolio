<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PersonaController extends Controller
{
    /**
     * Display the gateway page with persona selection
     */
    public function index(Request $request): View
    {
        $activePersona = $request->query('persona', 'gateway');
        
        return view('gateway', [
            'activePersona' => $activePersona,
            'personas' => $this->getPersonas()
        ]);
    }

    /**
     * Get persona content via AJAX
     */
    public function content(string $persona): View
    {
        $personas = $this->getPersonas();
        
        if (!isset($personas[$persona])) {
            abort(404);
        }

        $data = ['persona' => $personas[$persona]];
        if ($persona === 'tech') {
            $data['projects'] = $this->getTechProjects();
            $data['experiences'] = $this->getTechExperiences();
        }

        return view('personas.' . $persona, $data);
    }

    /**
     * Display the resume/overview page
     */
    public function resume(): View
    {
        return view('resume', [
            'roles' => $this->getAllRoles()
        ]);
    }

    /**
     * Get all personas configuration
     */
    private function getPersonas(): array
    {
        return [
            'tech' => [
                'id' => 'tech',
                'name' => 'Technology & Engineering',
                'headline' => 'Bukan Sekadar Kode. Saya Membangun Ekosistem Digital Cerdas.',
                'description' => 'Menggabungkan ketangguhan Full-Stack Development dengan kecerdasan Artificial Intelligence. Siap membantu Anda menciptakan aplikasi yang scalable, efisien, dan berwawasan.',
                'roles' => ['Full Stack Developer', 'AI/ML Engineer'],
                'theme' => 'blue-purple',
                'accent_color' => 'blue'
            ],
            'management' => [
                'id' => 'management',
                'name' => 'Management & Strategy',
                'headline' => 'Menerjemahkan visi bisnis menjadi produk yang sukses dan strategis.',
                'description' => 'Dengan pendekatan yang berorientasi pada hasil, saya menerjemahkan visi kompleks menjadi strategi yang dapat dieksekusi.',
                'roles' => ['Project Manager', 'Product Manager', 'Business Development'],
                'theme' => 'black-gold',
                'accent_color' => 'gold'
            ],
            'operations' => [
                'id' => 'operations',
                'name' => 'Operations & Creative',
                'headline' => 'Memastikan operasi bisnis berjalan lancar dengan sentuhan kreatif.',
                'description' => 'Menggabungkan efisiensi operasional dengan kreativitas untuk mendukung pertumbuhan bisnis yang berkelanjutan.',
                'roles' => ['IT Support', 'Administrator', 'Photography'],
                'theme' => 'green-gray',
                'accent_color' => 'green'
            ]
        ];
    }

    /**
     * Get all 8 roles for resume page
     */
    private function getAllRoles(): array
    {
        return [
            [
                'title' => 'Full Stack Developer',
                'category' => 'Technology & Engineering',
                'skills' => ['Laravel', 'Python', 'JavaScript & TypeScript', 'MySQL & NoSQL', 'Docker', 'CI/CD'],
                'description' => 'Pengembangan aplikasi web end-to-end dengan teknologi modern dan praktik terbaik.'
            ],
            [
                'title' => 'AI/ML Engineer',
                'category' => 'Technology & Engineering',
                'skills' => ['Python', 'TensorFlow', 'PyTorch', 'YOLO', 'OpenCV', 'CUDA'],
                'description' => 'Pengembangan model AI/ML untuk solusi computer vision dan data analytics.'
            ],
            [
                'title' => 'Project Manager',
                'category' => 'Management & Strategy',
                'skills' => ['Project Management', 'Agile/Scrum', 'Risk Management', 'Stakeholder Management'],
                'description' => 'Pengelolaan proyek teknologi dari perencanaan hingga implementasi yang sukses.'
            ],
            [
                'title' => 'Product Manager',
                'category' => 'Management & Strategy',
                'skills' => ['Product Strategy', 'User Research', 'Roadmap Planning', 'Data Analysis'],
                'description' => 'Pengembangan strategi produk yang berfokus pada kebutuhan pengguna dan tujuan bisnis.'
            ],
            [
                'title' => 'Business Development',
                'category' => 'Management & Strategy',
                'skills' => ['Market Analysis', 'Partnership Development', 'Go-to-Market Strategy', 'Sales'],
                'description' => 'Pengembangan peluang bisnis dan strategi pertumbuhan yang berkelanjutan.'
            ],
            [
                'title' => 'IT Support',
                'category' => 'Operations & Creative',
                'skills' => ['Technical Support', 'System Administration', 'Network Management', 'Troubleshooting'],
                'description' => 'Pemeliharaan sistem IT dan dukungan teknis untuk operasional bisnis.'
            ],
            [
                'title' => 'Administrator',
                'category' => 'Operations & Creative',
                'skills' => ['Office Management', 'Documentation', 'Process Improvement', 'Coordination'],
                'description' => 'Pengelolaan administratif dan operasional untuk efisiensi organisasi.'
            ],
            [
                'title' => 'Photography',
                'category' => 'Operations & Creative',
                'skills' => ['Adobe Suite', 'Photo Editing', 'Visual Storytelling', 'Creative Direction'],
                'description' => 'Kreativitas visual untuk mendukung kebutuhan branding dan marketing.'
            ]
        ];
    }

    /**
     * Parse docs/tech-project.md and return structured projects
     */
    private function getTechProjects(): array
    {
        $path = base_path('docs/tech-project.md');
        if (!file_exists($path)) {
            return [];
        }
        $raw = @file_get_contents($path);
        if ($raw === false) {
            return [];
        }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $projects = [];
        $current = null;
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') { continue; }
            if (preg_match('/^#\s+(.+)/', $line, $m)) {
                if ($current) { $projects[] = $current; }
                $current = ['title' => $m[1], 'description' => '', 'technologies' => [], 'link' => null, 'image' => null];
                continue;
            }
            if (!$current) { continue; }
            if (preg_match('/^-\s*Description:\s*(.+)/i', $line, $m)) {
                $current['description'] = $m[1];
                continue;
            }
            if (preg_match('/^-\s*Technologies:\s*(.+)/i', $line, $m)) {
                $techs = array_map('trim', preg_split('/,\s*/', $m[1]));
                $current['technologies'] = $techs;
                continue;
            }
            if (preg_match('/^-\s*Link:\s*(.+)/i', $line, $m) || preg_match('/^-\s*link:\s*(.+)/i', $line, $m)) {
                $current['link'] = trim($m[1]);
                $current['image'] = $this->extractImageFromReadme($current['link']);
                continue;
            }
        }
        if ($current) { $projects[] = $current; }
        return $projects;
    }

    /**
     * Attempt to fetch first image from a GitHub README
     */
    private function extractImageFromReadme(?string $githubUrl): ?string
    {
        if (!$githubUrl || !preg_match('/github.com\/([^\/]+)\/([^\/?#]+)/', $githubUrl, $m)) {
            return null;
        }
        $owner = $m[1];
        $repo = $m[2];
        $branches = ['main', 'master'];
        foreach ($branches as $branch) {
            $rawUrl = "https://raw.githubusercontent.com/{$owner}/{$repo}/{$branch}/README.md";
            $ctx = stream_context_create(['http' => ['timeout' => 2]]);
            $readme = @file_get_contents($rawUrl, false, $ctx);
            if ($readme === false) { continue; }
            if (preg_match('/!\[[^\]]*\]\(([^)]+)\)/', $readme, $mm)) {
                $img = $mm[1];
                if (preg_match('/^https?:\/\//', $img)) {
                    return $img;
                }
                $img = ltrim($img, './');
                return "https://raw.githubusercontent.com/{$owner}/{$repo}/{$branch}/{$img}";
            }
        }
        return null;
    }

    private function getTechExperiences(): array
    {
        $path = base_path('docs/tech-experience.md');
        if (!file_exists($path)) {
            return [];
        }
        $raw = @file_get_contents($path);
        if ($raw === false) {
            return [];
        }
        $lines = preg_split('/\r\n|\r|\n/', $raw);
        $exps = [];
        $current = null;
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') { continue; }
            if (preg_match('/^#\s+(.+)/', $line, $m)) {
                if ($current) { $exps[] = $current; }
                $current = ['title' => $m[1], 'org' => null];
                continue;
            }
            if ($current && preg_match('/^@\s*(.+)/', $line, $m)) {
                $current['org'] = $m[1];
                continue;
            }
        }
        if ($current) { $exps[] = $current; }
        return $exps;
    }
}