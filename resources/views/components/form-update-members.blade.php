<form action="{{ route('members.update', $member->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PATCH')

    <div class="form-control">
        <label class="label">Nama</label>
        <input type="text" name="name" class="input input-bordered" value="{{ $member->name }}" required>
    </div>

    <div class="form-control">
        <label class="label">Alamat</label>
        <input type="text" name="alamat" class="input input-bordered" value="{{ $member->alamat }}" required>
    </div>

    <div class="form-control">
        <label class="label">No Telp</label>
        <input type="text" name="no_telp" class="input input-bordered" value="{{ $member->no_telp }}" required>
    </div>

    <div class="form-control">
        <label class="label">Usia</label>
        <input type="number" name="umur" class="input input-bordered" value="{{ $member->umur }}" required>
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
    </div>

    <div>
        <button type="submit" class="btn btn-primary m-3">Update Member</button>
    </div>
</form>
