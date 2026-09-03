<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $developer = [
            'name' => 'Your Full Name',
            'title' => 'Full-Stack Developer & IT Student',
            'bio' => 'Passionate IT student specializing in modern web development, API integration, and cloud deployment. Driven by clean code, intuitive UI/UX design, and continuous learning.',
            'profile_picture' => 'images/profile.jpg', // Place your image in public/images/
            'status' => 'Open for Projects & Internships',
            'contacts' => [
                'email' => 'your.email@example.com',
                'phone' => '+63 912 345 6789',
                'github' => 'https://github.com/yourusername',
                'location' => 'Bangued, Abra, Philippines'
            ],
            'education' => [
                [
                    'level' => 'College',
                    'school' => 'Data Center College of the Philippines - Bangued',
                    'degree' => 'Bachelor of Science in Information Technology',
                    'period' => '2023 - Present',
                    'highlights' => 'Focused on Integrative Programming, Database Systems, and Web Application Frameworks.'
                ],
                [
                    'level' => 'Senior High School',
                    'school' => 'Your Senior High School Name',
                    'degree' => 'TVL - Information and Communications Technology (ICT)',
                    'period' => '2021 - 2023',
                    'highlights' => 'Academic excellence in Computer Systems Servicing and Basic Web Development.'
                ],
                [
                    'level' => 'Elementary School',
                    'school' => 'Your Elementary School Name',
                    'degree' => 'Elementary Education Diploma',
                    'period' => '2015 - 2021',
                    'highlights' => 'Graduated with honors.'
                ]
            ],
            'skills' => [
                'Backend' => ['Laravel Framework', 'PHP 8+', 'RESTful APIs', 'MySQL Database'],
                'Frontend' => ['Tailwind CSS', 'JavaScript (ES6+)', 'Blade Templating', 'HTML5 & CSS3'],
                'Tools & Workflow' => ['Git & GitHub', 'VS Code', 'Composer', 'npm', 'XAMPP Stack']
            ],
            'certifications' => [
                [
                    'title' => 'Career Service Professional Eligibility (CSE)',
                    'issuer' => 'Civil Service Commission (CSC)',
                    'year' => '2025'
                ],
                [
                    'title' => 'Full-Stack Web Development Bootcamp',
                    'issuer' => 'Online Certification Platform',
                    'year' => '2024'
                ],
                [
                    'title' => 'Integrative Programming Workshop',
                    'issuer' => 'Data Center College of the Philippines',
                    'year' => '2026'
                ]
            ]
        ];

        return view('portfolio', compact('developer'));
    }
}