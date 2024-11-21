<form action="{{ route('units.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
    @csrf

    <div>
        <label class="label">
            <span class="label-text">Unit ID</span>
        </label>
        <input type="text" name="unit_id" required class="input input-bordered w-full" placeholder="Masukkan Unit ID" />
        @error('unit_id')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Nama</span>
        </label>
        <input type="text" name="name" required class="input input-bordered w-full" placeholder="Masukkan Nama" />
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Kabupaten</span>
        </label>
        <input type="text" name="kabupaten" required class="input input-bordered w-full" placeholder="Masukkan Kabupaten" />
        @error('kabupaten')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Provinsi</span>
        </label>
        <input type="text" name="provinsi" required class="input input-bordered w-full" placeholder="Masukkan Provinsi" />
        @error('provinsi')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Harga</span>
        </label>
        <input type="number" name="harga" required class="input input-bordered w-full" placeholder="Masukkan Harga" />
        @error('harga')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Jumlah Kamar</span>
        </label>
        <input type="number" name="jumlah_kamar" required class="input input-bordered w-full" placeholder="Masukkan Jumlah Kamar" />
        @error('jumlah_kamar')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Luas Bangunan (m²)</span>
        </label>
        <input type="number" name="luas_bangunan" required class="input input-bordered w-full" placeholder="Masukkan Luas Bangunan" />
        @error('luas_bangunan')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Luas Lahan (m²)</span>
        </label>
        <input type="number" name="luas_lahan" required class="input input-bordered w-full" placeholder="Masukkan Luas Lahan" />
        @error('luas_lahan')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary m-3">Tambah Unit</button>
    </div>
</form>