<header class="bg-blue-900 text-white p-4" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/">Home</x-nav-link>
            <x-nav-link url="jobs">All Jobs</x-nav-link>
            @auth
                <x-nav-link url="jobs/saved">Saved Jobs</x-nav-link>
                <x-nav-link url="dashboard">Dashboard</x-nav-link>
                <x-button-link url="jobs/create" icon="edit">Create Job</x-button-link>
                <x-logout />
            @else
                <x-nav-link url="login">Login</x-nav-link>
                <x-nav-link url="register">Register</x-nav-link>
            @endauth
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center" @click="open = !open">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" @click.away="open = false" class="md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
        x-show="open">
        <x-nav-link url="/" mobile>Home</x-nav-link>
        <x-nav-link url="jobs" mobile>All Jobs</x-nav-link>
        @auth
            <x-nav-link url="jobs/saved" mobile>Saved Jobs</x-nav-link>
            <x-nav-link url="dashboard" mobile>Dashboard</x-nav-link>
            <x-button-link url="jobs/create" icon="edit" block>Create Job</x-button-link>
            <x-logout mobile />
        @else
            <x-nav-link url="login" mobile>Login</x-nav-link>
            <x-nav-link url="register" mobile>Register</x-nav-link>
        @endauth
    </div>
</header>
