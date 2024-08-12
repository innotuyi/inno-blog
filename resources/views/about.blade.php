{{-- @extends('layouts.app')

@section('title', 'About Me')

@section('content') --}}


<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    </head>

    <body>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h1 class="card-title text-center mb-4">About Me</h1>
                            <div class="text-center">
                                <img src="{{ asset('images/profile.jpg') }}" alt="Your Name" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px;">
                            </div>
                            <p class="lead">
                                Hello! I'm <strong>Innocent Tuyishimire</strong>, the voice behind this blog. I am passionate about [mention your interests, e.g., technology, writing, photography, etc.]. This blog is my space where I share my thoughts, experiences, and ideas with the world.
                            </p>
                            <p>
                                My journey started [mention your background or start of your blogging journey]. Since then, I've been exploring various topics, learning, and growing along the way. Through this blog, I hope to connect with like-minded individuals, inspire others, and contribute to a community of passionate people.
                            </p>
                            <p>
                                When I'm not blogging, you can find me [mention your hobbies or activities, e.g., reading a good book, exploring new places, tinkering with gadgets, etc.]. I believe in [mention your philosophy or values, e.g., lifelong learning, creativity, innovation, etc.], and I strive to bring those into everything I do.
                            </p>
                            <p>
                                Thank you for stopping by! Feel free to explore, comment, and reach out if you'd like to connect. I'm always open to new ideas, collaborations, and conversations.
                            </p>
                            <div class="text-center mt-4">
                                <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>>
    </body>
</html>

{{-- @endsection --}}
