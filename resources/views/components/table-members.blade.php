@props(['members'])
<div class="overflow-x-auto w-full">
    <a href="#" class=" btn btn-info">
        <i class="fa-solid fa-plus"></i> Tambah Data
    </a>

    <table class="table">
        <!-- head -->
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telp</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Usia</th>
                <th colspan="">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr class="bg-base-200 text-center">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $member->member_id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->no_telp }}</td>
                    <td>{{ $member->alamat }}</td>
                    <td>{{ $member->gender }}</td>
                    <td>{{ $member->usia }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <button class="btn btn-sm btn-error" type="button"
                            data-url=""
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
