<div class="bg-purple-700 mb-8">
    <div class="container mx-auto">
        <div class="flex items-center">
            <a class="block px-8 py-4 text-white {{ session('activeNav') === 'home' ? 'bg-purple-800' : null }}" href="{{ route('home') }}">Home</a>
            <a class="block px-8 py-4 text-white {{ session('activeNav') === 'about' ? 'bg-purple-800' : null }}" href="{{ route('about-us') }}">About Us</a>
            <a class="block px-8 py-4 text-white {{ session('activeNav') === 'contact' ? 'bg-purple-800' : null }}" href="{{ route('contact-us') }}">Contact Us</a>
            <a class="block px-8 py-4 text-white {{ session('activeNav') === 'signup' ? 'bg-purple-800' : null }}" href="{{ route('signup.form') }}">Signup</a>
            <a class="block px-8 py-4 text-white {{ session('activeNav') === 'comment' ? 'bg-purple-800' : null }}" href="{{ route('comment.index') }}">Comments</a>
        </div>
    </div>
</div>