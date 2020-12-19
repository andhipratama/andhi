<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>No</th>
        <th>Tahun</th>
        <th>Kecamatan_ID</th>
        <th>Tanaman_Perkebunan_ID</th>
        <th>Nilai</th>
        <th>Aksi</th>
    </tr>
    </thead>
        <tbody>
            @foreach($luass as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->kecamatan_id }}</td>
                <td>{{ $item->tanaman_perkebunan_id }}</td>
                <td>{{ $item->nilai }}</td>
                <td><a href="{{ route('luas.show',$item->id) }}" class="btn btn-success">Tampil</a></td>
            </tr>
            @endforeach
        </tbody>
</table>