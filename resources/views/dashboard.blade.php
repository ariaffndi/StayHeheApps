<x-layout>
<div class="drawer lg:drawer-open">
      <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
      <div class="drawer-content flex flex-col p-5">
            <!-- Page content here -->
            <label for="my-drawer-2" class="drawer-overlay btn drawer-button self-start ml-2 mt-2 lg:hidden my-5">
            <i class="fa-solid fa-bars"></i>
            </label>
            <div>
            <h1 class="text-3xl font-bold">Main Dashboard</h1>
            <hr class="mt-4">
            </div>
            <div class="overflow-x-auto w-full mt-4">
                  <x-list-card-dashboard :totalUnits="$totalUnits" :totalMembers="$totalMembers" :totalBookings="$totalBookings"></x-list-card-dashboard>
            </div>
      </div>

      <!-- Sidebar -->
      <x-sidebar></x-sidebar>
</div>
</x-layout>
