<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $developer['name'] }} - Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto my-10 p-6 bg-white shadow-lg rounded-lg">
        <!-- Header / Profile Section -->
        <div class="flex flex-col md:flex-row items-center gap-6 border-b pb-6">
            <img src="{{ asset($developer['profile_picture']) }}" alt="Profile Picture" class="w-32 h-32 rounded-full object-cover border-2 border-indigo-600">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">{{ $developer['name'] }}</h1>
                <p class="text-indigo-600 font-semibold">{{ $developer['program'] }}</p>
                <p class="text-gray-600">{{ $developer['school'] }} ({{ $developer['graduation'] }})</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="my-6">
            <h2 class="text-xl font-bold mb-2">Contact Details</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Email:</strong> {{ $developer['contacts']['email'] }}</li>
                <li><strong>Phone:</strong> {{ $developer['contacts']['phone'] }}</li>
                <li><strong>GitHub:</strong> <a href="{{ $developer['contacts']['github'] }}" class="text-indigo-500 underline" target="_blank">{{ $developer['contacts']['github'] }}</a></li>
            </ul>
        </div>

        <!-- Skills Section -->
        <div class="my-6">
            <h2 class="text-xl font-bold mb-2">Technical Skills</h2>
            <div class="flex flex-wrap gap-2">
                @foreach($developer['skills'] as $skill)
                    <span class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">{{ $skill }}</span>
                @endforeach
            </div>
        </div>

        <!-- Certifications Section -->
        <div class="my-6">
            <h2 class="text-xl font-bold mb-2">Certifications & Training</h2>
            <ul class="list-disc list-inside text-gray-700">
                @foreach($developer['certifications'] as $cert)
                    <li>{{ $cert }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>