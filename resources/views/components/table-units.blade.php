<div class="overflow-x-auto w-full">
    <a href="input-units" class="{{ request()->is('input-units')}} btn btn-info">
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
            {{-- @foreach ($units as $unit) --}}
            <tr class="bg-base-200 text-center">
                <th>1</th>
                <td>Unt01</td>
                <td>Tavia Hotel & Vila</td>
                <td>Batu</td>
                <td>East Java</td>
                <td>3000000</td>
                <td>7</td>
                <td>500</td>
                <td>1000</td>
                <td>
                    <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <button class="btn btn-sm btn-error" onclick="modalConfirmDelete.showModal()">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
