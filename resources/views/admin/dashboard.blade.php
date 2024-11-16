<x-layout>
   <div class="drawer lg:drawer-open">
      <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
      <x-sidebar></x-sidebar>
      <div class="drawer-content flex flex-col p-5">
         <label for="my-drawer-2" class="btn drawer-button self-start ml-2 mt-2 lg:hidden my-5">
               <i class="fa-solid fa-bars"></i>
         </label>

         <!-- Page content here -->
         <div>
               <h1 class="text-3xl font-bold">Main Dashboard</h1>
               <hr class="mt-4">
         </div>
         <div class="mt-4 flex flex-wrap gap-4 items-center justify-center">
               <x-card-bookings><i class="fa-solid fa-building"></i> Bookings</x-card-bookings>
               <x-card-units><i class="fa-solid fa-building"></i> Units</x-card-units>
               <x-card-users><i class="fa-solid fa-user"></i> Users</x-card-users>
         </div>
      </div>

   </div>
</x-layout>
