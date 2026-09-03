<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $developer = [
            'name' => 'Justine Pilar',
            'profile_picture' => 'images/profile.jpg',
            'school' => 'Data Center College of the Philippines - Bangued',
            'program' => 'Bachelor of Science in Information Technology',
            'graduation' => 'Expected Graduation: 2027',
            'contacts' => [
                'email' => 'your.email@example.com',
                'phone' => '+63 966 283 6506',
                'github' => 'https://github.com/justinepilar96/Pilar-Portfolio',
            ],
            'skills' => ['Laravel', 'PHP', 'JavaScript', 'Tailwind CSS', 'Git & GitHub', 'MySQL'],
            'certifications' => [
                'Career Service Professional Eligibility (CSE)',
                'Web Development Bootcamp Certificate',
                'Integrative Programming Workshop'
            ]
        ];

        return view('portfolio', compact('developer'));
    }
}