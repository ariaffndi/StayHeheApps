<form action="{{ route('units.update', $unit->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PATCH')

    <div class="form-control">
        <label class="label">Unit ID</label>
        <input type="text" name="unit_id" class="input input-bordered" value="{{ $unit->unit_id }}" required>
    </div>

    <div class="form-control">
        <label class="label">Nama</label>
        <input type="text" name="name" class="input input-bordered" value="{{ $unit->name }}" required>
    </div>

    <div class="form-control">
        <label class="label">Kabupaten</label>
        <input type="text" name="kabupaten" class="input input-bordered" value="{{ $unit->kabupaten }}" required>
    </div>

    <div class="form-control">
        <label class="label">Provinsi</label>
        <input type="text" name="provinsi" class="input input-bordered" value="{{ $unit->provinsi }}" required>
    </div>

    <div class="form-control">
        <label class="label">Harga</label>
        <input type="number" name="harga" class="input input-bordered" value="{{ $unit->harga }}" required>
    </div>

    <div class="form-control">
        <label class="label">Jumlah Kamar</label>
        <input type="number" name="jumlah_kamar" class="input input-bordered" value="{{ $unit->jumlah_kamar }}"
            required>
    </div>

    <div class="form-control">
        <label class="label">Luas Bangunan</label>
        <input type="number" name="luas_bangunan" class="input input-bordered" value="{{ $unit->luas_bangunan }}"
            required>
    </div>

    <div class="form-control">
        <label class="label">Luas Lahan</label>
        <input type="number" name="luas_lahan" class="input input-bordered" value="{{ $unit->luas_lahan }}" required>
    </div>

    <div>
        <button type="submit" class="btn btn-primary m-3">Update Unit</button>
    </div>
</form>
