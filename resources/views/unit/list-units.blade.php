<x-layout>
    <x-modal-confirm-delete></x-modal-confirm-delete>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col p-5">
            <!-- Page content here -->
            <label for="my-drawer-2" class="drawer-overlay btn drawer-button self-start ml-2 mt-2 lg:hidden my-5">
                <i class="fa-solid fa-bars"></i>
            </label>
            <!-- Page content here -->
            <div>
                <h1 class="text-3xl font-bold">Our Units</h1>
                <hr class="mt-4">
            </div>
            <div class="mt-4 flex flex-wrap gap-4 items-center justify-center">
                <x-table-units :units="$units"></x-table-units>
            </div>
        </div>
        <!-- Sidebar -->
        <x-sidebar></x-sidebar>
    </div>
</x-layout>
