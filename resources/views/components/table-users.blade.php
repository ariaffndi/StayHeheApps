@props(['members'])
<div class="overflow-x-auto w-full">
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
                <th colspan="">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr class="bg-base-200 text-center">
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $member->member_id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->alamat }}</td>
                    <td>{{ $member->umur }}</td>
                    <td>081111111111</td>
                    <td>{{ $member->gender }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <button class="btn btn-sm btn-error" onclick="modalConfirmDelete.showModal()">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
