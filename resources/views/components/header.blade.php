<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="/">Home</x-nav-link>
            <x-nav-link url="jobs">All Jobs</x-nav-link>
            <x-nav-link url="jobs/saved">Saved Jobs</x-nav-link>
            <x-nav-link url="login">Login</x-nav-link>
            <x-nav-link url="register">Register</x-nav-link>
            <x-nav-link url="dashboard" icon="gauge">Dashboard</x-nav-link>
            <x-button-link url="jobs/create" icon="edit">Create Job</x-button-link>
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="/" mobile>Home</x-nav-link>
        <x-nav-link url="jobs" mobile>All Jobs</x-nav-link>
        <x-nav-link url="jobs/saved" mobile>Saved Jobs</x-nav-link>
        <x-nav-link url="login" mobile>Login</x-nav-link>
        <x-nav-link url="register" mobile>Register</x-nav-link>
        <x-nav-link url="dashboard" icon="gauge" mobile>Dashboard</x-nav-link>
        <x-button-link url="jobs/create" icon="edit" block>Create Job</x-button-link>
    </div>
</header>
