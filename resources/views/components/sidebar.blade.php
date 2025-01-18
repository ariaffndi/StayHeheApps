<div class="drawer-side">
    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
    <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4 flex flex-col justify-between">
        <!-- Sidebar content here -->
        <div>
            <li><a class="text-2xl font-bold">StayHehe Admin</a></li>
            <li><a href="{{ route('dashboard') }}"
                    class="{{ request()->is('dashboard') ? 'nav-link active' : 'nav-link' }} text-xl"><i
                        class="fa-solid fa-house "></i> Dashboard</a></li>
            <li><a href="list-bookings" class="{{ request()->is('list-bookings') ? 'nav-link active' : 'nav-link' }}"><i
                        class="fa-solid fa-calendar-days "></i> Bookings</a></li>
            <li><a href="{{ route('units.index') }}"
                    class="{{ request()->is('list-units') ? 'nav-link active' : 'nav-link' }}"><i
                        class="fa-solid fa-building"></i> Units</a></li>
            <li><a href="{{ route('member.index') }}"
                    class="{{ request()->is('list-members') ? 'nav-link active' : 'nav-link' }}"><i
                        class="fa-solid fa-user"></i> Members</a></li>
        </div>
        <div class="w-full">
            <x-dropdown-profile></x-dropdown-profile>
        </div>
    </ul>
</div>
