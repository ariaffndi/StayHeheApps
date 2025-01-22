<form action="{{ route('members.store') }}" method="POST" class="bg-base-200 p-6 rounded-lg shadow-md">
    @csrf

    <div>
        <label class="label">
            <span class="label-text">Member ID</span>
        </label>
        <input type="text" name="member_id" required class="input input-bordered w-full"
            placeholder="Masukkan Member ID" />
        @error('member_id')
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
            <span class="label-text">Alamat</span>
        </label>
        <input type="text" name="alamat" required class="input input-bordered w-full"
            placeholder="Masukkan alamat" />
        @error('alamat')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Umur</span>
        </label>
        <input type="number" name="umur" required class="input input-bordered w-full" placeholder="Masukkan umur" />
        @error('umur')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">No Telp</span>
        </label>
        <input type="text" name="no_telp" required class="input input-bordered w-full"
            placeholder="Masukkan No Telp" />
        @error('no_telp')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label class="label">
            <span class="label-text">Gender</span>
        </label>
        <div class="form-control">
            <label class="label cursor-pointer justify-start">
                <input type="radio" name="gender" class="radio checked:bg-red-500" checked="checked" value="Laki-laki" />
                <span class="label-text ml-2">Laki-Laki</span>
            </label>
        </div>
        <div class="form-control">
            <label class="label cursor-pointer justify-start">
                <input type="radio" name="gender" class="radio checked:bg-blue-500" checked="checked" value="Perempuan"/>
                <span class="label-text ml-2">Perempuan</span>
            </label>
        </div>
        @error('gender')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <button type="submit" class="btn btn-primary m-3">Tambah Member</button>
    </div>
</form>
