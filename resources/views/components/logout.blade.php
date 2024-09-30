@props(['mobile' => false])
<form method="POST" action="{{ route('logout') }}">
    @csrf
    @if ($mobile)
        <button type="submit" class="text-white submit px-4 py-2 block">
            <i class="fa fa-sign-out"></i>
            Logout
        </button>
    @else
        <button type="submit" class="text-white submit">
            <i class="fa fa-sign-out"></i>
            Logout
        </button>
    @endif
</form>
