<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $developer = [
            'name' => 'Justine Pilar',
            'title' => 'IT Student',
            'bio' => 'Passionate IT student specializing in modern web development, API integration, and cloud deployment. Driven by clean code, intuitive UI/UX design, and continuous learning.',
            'profile_picture' => 'images/profile.jpg', // Place your image in public/images/
            'status' => 'Open for Projects & Internships',
            'contacts' => [
                'email' => 'justinepilar06@gmail.com',
                'phone' => '+63 966 283 6506',
                'github' => 'https://github.com/justinepilar96/Pilar-Portfolio',
                'location' => 'Santa Rosa, Bangued Abra, Philippines'
            ],
            'education' => [
                [
                    'level' => 'College',
                    'school' => 'Data Center College of the Philippines - Bangued',
                    'degree' => 'Bachelor of Science in Information Technology',
                    'period' => 'Present',
                ],
                [
                    'level' => 'Senior High School',
                    'school' => 'Data Center College of the Philippines - Bangued',
                    'degree' => 'HUMSS - Humanities and Social Sciences',
                    'period' => '2022',
                ],
                [
                    'level' => 'Elementary School',
                    'school' => 'Holy Spirit Academy of Bangued',
                    'degree' => 'Elementary Education Diploma',
                    'period' => '2016',
                ]
            ],
            'skills' => [
                'Backend' => ['Laravel Framework', 'PHP 8+', 'RESTful APIs', 'MySQL Database'],
                'Frontend' => ['Tailwind CSS', 'JavaScript (ES6+)', 'Blade Templating', 'HTML5 & CSS3'],
                'Tools & Workflow' => ['Git & GitHub', 'VS Code', 'Composer', 'npm', 'XAMPP Stack']
            ],
            'certifications' => [
                [
                    'title' => 'Online Safety Through Netiquette - DICT Region II Webinar',
                    'issuer' => 'Department of Information and Communications Technology (DICT) Region II',
                    'year' => '2026'
                ]
            ]
        ];

        return view('portfolio', compact('developer'));
    }
}