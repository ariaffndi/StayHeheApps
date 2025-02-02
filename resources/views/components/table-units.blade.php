@props(['units'])

<div class="overflow-x-auto w-full">
    <a href="{{ route('units.create') }}" class=" btn btn-info">
        <i class="fa-solid fa-plus"></i> Tambah Data
    </a>

    <table class="table">
        <!-- head -->
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Unit ID</th>
                <th>Nama</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <th>Harga</th>
                <th>Jumlah Kamar</th>
                <th>Luas Bangunan</th>
                <th>Luas Lahan</th>
                <th colspan="">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($units as $unit)
                <tr class="bg-base-200 text-center">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $unit->unit_id }}</td>
                    <td>{{ $unit->name }}</td>
                    <td>{{ $unit->kabupaten }}</td>
                    <td>{{ $unit->provinsi }}</td>
                    <td>{{ number_format($unit->harga, 0, ',', '.') }}</td>
                    <td>{{ $unit->jumlah_kamar }}</td>
                    <td>{{ $unit->luas_bangunan }}</td>
                    <td>{{ $unit->luas_lahan }}</td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="{{ route('units.edit', $unit->id) }}" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <button class="btn btn-sm btn-error" type="button"
                            data-url="{{ route('units.destroy', $unit->id) }}"
                            onclick="showDeleteModal(this)">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<!-- Modal -->
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
    const deleteForm = modalConfirmDelete.querySelector('form');

    function showDeleteModal(button) {
        const url = button.getAttribute('data-url'); // Ambil URL dari tombol
        deleteForm.action = url; // Set URL ke action form
        modalConfirmDelete.showModal(); // Tampilkan modal
    }
</script>
