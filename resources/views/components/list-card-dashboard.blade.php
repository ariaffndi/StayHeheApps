<div class="mt-4 flex flex-wrap items-center justify-evenly">
    <x-card-bookings :totalBookings="$totalBookings"><i class="fa-solid fa-calendar"></i> Bookings</x-card-bookings>
    <x-card-units :totalUnits="$totalUnits"><i class="fa-solid fa-building"></i> Units</x-card-units>
    <x-card-members :totalMembers="$totalMembers"><i class="fa-solid fa-user"></i> Members</x-card-members>
</div>

