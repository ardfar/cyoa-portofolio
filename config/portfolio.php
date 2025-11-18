<?php

return [
    'site' => [
        'name' => 'Portofolio Multi-Peran',
        'title' => 'Portofolio Multi-Peran - Choose Your Own Adventure',
        'description' => 'Website portofolio interaktif yang menampilkan berbagai keahlian profesional berdasarkan konteks yang Anda pilih.',
        'keywords' => 'portofolio, multi-peran, teknologi, manajemen, kreatif, full-stack, AI/ML, project management',
        'author' => 'Nama Anda',
        'url' => env('APP_URL', 'http://localhost'),
    ],
    
    'personas' => [
        'tech' => [
            'meta_title' => 'Technology & Engineering Portfolio - Full Stack & AI/ML Expert',
            'meta_description' => 'Portofolio teknologi dengan keahlian Full Stack Development dan AI/ML Engineering. Solusi end-to-end untuk kebutuhan teknologi Anda.',
            'meta_keywords' => 'full stack developer, AI/ML engineer, Laravel, Python, JavaScript, TensorFlow, Docker, CI/CD',
            'og_image' => '/images/tech-og-image.jpg',
        ],
        'management' => [
            'meta_title' => 'Management & Strategy Portfolio - Project & Business Development',
            'meta_description' => 'Portofolio manajemen dan strategi bisnis. Keahlian dalam Project Management, Product Management, dan Business Development.',
            'meta_keywords' => 'project manager, product manager, business development, strategic planning, agile, scrum, ROI',
            'og_image' => '/images/management-og-image.jpg',
        ],
        'operations' => [
            'meta_title' => 'Operations & Creative Portfolio - IT Support & Photography',
            'meta_description' => 'Portofolio operasional dan kreatif. Keahlian dalam IT Support, Administrasi, dan Photography dengan sentuhan kreatif.',
            'meta_keywords' => 'IT support, administrator, photography, creative, operations, Adobe Suite, problem solving',
            'og_image' => '/images/operations-og-image.jpg',
        ],
    ],
    
    'contact' => [
        'email' => 'nama@email.com',
        'phone' => '+62 812-3456-7890',
        'location' => 'Jakarta, Indonesia',
        'linkedin' => 'https://linkedin.com/in/namaanda',
        'github' => 'https://github.com/namaanda',
        'twitter' => 'https://twitter.com/namaanda',
    ],
    
    'projects' => [
        'tech' => [
            [
                'title' => 'Platform E-commerce',
                'description' => 'Full-stack e-commerce solution dengan payment gateway, inventory management, dan real-time analytics.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Redis'],
                'link' => '#',
                'github' => '#',
            ],
            [
                'title' => 'AI Object Detection',
                'description' => 'Sistem deteksi objek real-time menggunakan YOLO dan OpenCV untuk aplikasi monitoring.',
                'technologies' => ['Python', 'YOLO', 'OpenCV', 'CUDA'],
                'link' => '#',
                'github' => '#',
            ],
            [
                'title' => 'DevOps Dashboard',
                'description' => 'Monitoring dan manajemen infrastruktur dengan CI/CD pipeline automation dan real-time metrics.',
                'technologies' => ['Docker', 'Kubernetes', 'Jenkins', 'Grafana'],
                'link' => '#',
                'github' => '#',
            ],
        ],
        'management' => [
            [
                'title' => 'Product Launch Success',
                'description' => 'Peluncuran produk SaaS baru yang menghasilkan 500+ pengguna dalam 3 bulan pertama dengan strategi go-to-market yang efektif.',
                'technologies' => ['Market Research', 'Go-to-Market', 'User Acquisition'],
                'link' => '#',
                'case_study' => '#',
            ],
            [
                'title' => 'Process Optimization',
                'description' => 'Redesain proses bisnis yang mengurangi waktu delivery 40% dan meningkatkan efisiensi operasional secara signifikan.',
                'technologies' => ['Process Mapping', 'Agile', 'Efficiency'],
                'link' => '#',
                'case_study' => '#',
            ],
            [
                'title' => 'Strategic Partnership',
                'description' => 'Mengembangkan kemitraan strategis yang membuka akses ke market baru dan meningkatkan revenue 35%.',
                'technologies' => ['Partnership', 'Market Expansion', 'Revenue Growth'],
                'link' => '#',
                'case_study' => '#',
            ],
        ],
        'operations' => [
            [
                'title' => 'IT Infrastructure Upgrade',
                'description' => 'Implementasi sistem IT yang lebih efisien, mengurangi downtime 60% dan meningkatkan productivity seluruh tim.',
                'technologies' => ['System Admin', 'Network', 'Security'],
                'link' => '#',
                'case_study' => '#',
            ],
            [
                'title' => 'Administrative Process Optimization',
                'description' => 'Redesain proses administratif yang mengurangi paperwork 45% dan meningkatkan response time secara signifikan.',
                'technologies' => ['Process Design', 'Documentation', 'Efficiency'],
                'link' => '#',
                'case_study' => '#',
            ],
            [
                'title' => 'Creative Problem Solving',
                'description' => 'Solusi kreatif untuk tantangan operasional dengan pendekatan yang inovatif dan cost-effective.',
                'technologies' => ['Innovation', 'Creative', 'Solutions'],
                'link' => '#',
                'case_study' => '#',
            ],
        ],
    ],
    
    'skills' => [
        'tech' => [
            'Laravel', 'Python', 'JavaScript & TypeScript', 'MySQL & NoSQL', 'Docker', 'CI/CD',
            'TensorFlow', 'PyTorch', 'YOLO', 'OpenCV', 'CUDA', 'Vue.js', 'React', 'Node.js'
        ],
        'management' => [
            'Project Management', 'Agile/Scrum', 'Risk Management', 'Stakeholder Management',
            'Product Strategy', 'User Research', 'Roadmap Planning', 'Data Analysis',
            'Market Analysis', 'Partnership Development', 'Go-to-Market Strategy', 'Sales'
        ],
        'operations' => [
            'Technical Support', 'System Administration', 'Network Management', 'Troubleshooting',
            'Office Management', 'Documentation', 'Process Improvement', 'Coordination',
            'Adobe Suite', 'Photo Editing', 'Visual Storytelling', 'Creative Direction'
        ],
    ],
    
    'testimonials' => [
        'tech' => [
            [
                'name' => 'John Doe',
                'role' => 'CTO at Tech Company',
                'content' => 'Exceptional technical skills and ability to deliver complex projects on time. Highly recommended for any technology project.',
                'rating' => 5,
            ],
            [
                'name' => 'Jane Smith',
                'role' => 'Lead Developer',
                'content' => 'Great problem-solving skills and deep understanding of modern tech stack. A valuable team member.',
                'rating' => 5,
            ],
        ],
        'management' => [
            [
                'name' => 'Michael Johnson',
                'role' => 'CEO at Startup',
                'content' => 'Strategic thinking and excellent project management skills. Helped us launch our product successfully.',
                'rating' => 5,
            ],
            [
                'name' => 'Sarah Wilson',
                'role' => 'Product Director',
                'content' => 'Outstanding ability to translate business requirements into actionable plans. Great leadership qualities.',
                'rating' => 5,
            ],
        ],
        'operations' => [
            [
                'name' => 'David Brown',
                'role' => 'Operations Manager',
                'content' => 'Efficient and reliable. Improved our operational processes significantly. Very professional approach.',
                'rating' => 5,
            ],
            [
                'name' => 'Lisa Garcia',
                'role' => 'Creative Director',
                'content' => 'Creative solutions and excellent attention to detail. Delivered beyond our expectations.',
                'rating' => 5,
            ],
        ],
    ],
];