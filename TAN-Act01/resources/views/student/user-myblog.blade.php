<!-- resources/views/student/user-myblog.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Blogs</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .blog-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
            padding: 2rem;
        }
        .blog-card {
            background-color: #4a5568; /* bg-gray-700 */
            padding: 1rem;
            border-radius: 0.5rem; /* rounded-lg */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* shadow */
            color: #fff; /* text-white */
        }
        .blog-card h2 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .blog-card p {
            margin-bottom: 0.5rem;
        }
        .blog-card .author, .blog-card .date {
            font-size: 0.875rem;
            color: #a0aec0; /* text-gray-400 */
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
<div class="container mx-auto">
    <h1 class="text-3xl font-bold text-center my-8">User Blogs</h1>
    <div class="blog-container">
        @foreach ($blogs as $blog)
            <div class="blog-card">
                <h2>{{ $blog->blog_title }}</h2>
                <p>{{ $blog->blog_short_description }}</p>
                <p class="author">By: {{ $blog->author }}</p>
                <p class="date">Created on: {{ $blog->date_created }}</p>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
