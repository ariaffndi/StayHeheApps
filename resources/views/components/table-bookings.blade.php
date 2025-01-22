@props(['bookings'])

<div class="overflow-x-auto w-full">
    <a href="{{ route('bookings.create') }}" class=" btn btn-info">
        <i class="fa-solid fa-plus"></i> Tambah Data
    </a>

    <table class="table">
        <!-- head -->
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Booking ID</th>
                <th>Nama</th>
                <th>Unit</th>
                <th>Tanggal Checkin</th>
                <th>Tanggal Checkout</th>
                <th>Status</th>
                <th colspan="">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr class="bg-base-200 text-center">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $booking->booking_id }}</td>
                    <td>{{ $booking->member->name }}</td>
                    <td>{{ $booking->unit->name }}</td>
                    <td>{{ $booking->start_date }}</td>
                    <td>{{ $booking->end_date }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <button class="btn btn-sm btn-success" type="button"
                            data-url="{{ route('bookings.complete', $booking->id) }}" onclick="showCompleteModal(this)">
                            <i class="fa-solid fa-check"></i>
                        </button>
                        <button class="btn btn-sm btn-error" type="button"
                            data-url="{{ route('bookings.destroy', $booking->id) }}" onclick="showDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<!-- Modal Complete -->
<dialog id="modalConfirmComplete" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Alert!</h3>
        <p class="py-4">Yakin ingin menyelesaikan?</p>
        <div class="modal-action">
            <form method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success">Selesai</button>
                <button type="button" class="btn" onclick="modalConfirmDelete.close()">Cancel</button>
            </form>
        </div>
    </div>
</dialog>

<!-- Modal Delete -->
<dialog id="modalConfirmDelete" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Alert!</h3>
        <p class="py-4">Yakin ingin menghapus?</p>
        <div class="modal-action">
            <form method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-error">Delete</button>
                <button type="button" class="btn" onclick="modalConfirmDelete.close()">Cancel</button>
            </form>
        </div>
    </div>
</dialog>

<!-- JavaScript -->
<script>
    const modalConfirmDelete = document.getElementById('modalConfirmDelete');
    const modalConfirmComplete = document.getElementById('modalConfirmComplete');
    const deleteForm = modalConfirmDelete.querySelector('form');
    const completeForm = modalConfirmComplete.querySelector('form');

    function showDeleteModal(button) {
        const url = button.getAttribute('data-url'); // Ambil URL dari tombol
        deleteForm.action = url; // Set URL ke action form
        modalConfirmDelete.showModal(); // Tampilkan modal
    }

    function showCompleteModal(button) {
        const url = button.getAttribute('data-url'); // Ambil URL dari tombol
        completeForm.action = url; // Set URL ke action form
        modalConfirmComplete.showModal(); // Tampilkan modal
    }
</script>
