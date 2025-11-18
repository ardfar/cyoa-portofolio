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

        return view('personas.' . $persona, [
            'persona' => $personas[$persona]
        ]);
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
                'headline' => 'Membangun solusi teknis, dari kode hingga infrastruktur cerdas.',
                'description' => 'Sebagai praktisi teknologi, saya fokus pada pengembangan solusi end-to-end yang scalable dan inovatif.',
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
}