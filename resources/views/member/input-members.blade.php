<x-layout>
   <div class="drawer lg:drawer-open">
      <!-- Drawer toggle checkbox -->
      <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
      <x-sidebar></x-sidebar>

      <div class="drawer-content flex flex-col p-5">
            <!-- Drawer toggle button -->
            <label for="my-drawer-2" class="btn drawer-button self-start ml-2 mt-2 lg:hidden my-5">
               <i class="fa-solid fa-bars"></i>
            </label>

            <!-- Page content here -->
            <div>
               <h1 class="text-3xl font-bold">Tambah Member</h1>
               <hr class="mt-4">
               <x-form-members></x-form-members>
            </div>
      </div>
   </div>
</x-layout>
