<x-layout>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col p-5">
            <!-- Page content here -->
            <label for="my-drawer-2" class="drawer-overlay btn drawer-button self-start ml-2 mt-2 lg:hidden my-5">
                <i class="fa-solid fa-bars"></i>
            </label>
            <div>
                <h1 class="text-3xl font-bold">Users Registered</h1>
                <hr class="mt-4">
            </div>
            <div class="mt-4 flex flex-wrap gap-4 items-center justify-center">
                <x-table-members :members='$members'></x-table-members>
            </div>
        </div>

        <!-- Sidebar -->
        <x-sidebar></x-sidebar>
    </div>
</x-layout>
