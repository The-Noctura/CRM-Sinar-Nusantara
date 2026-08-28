<h1>Gudang</h1>

<table>
    <thead>
        <tr>
            <td>Nama Gudang</td>
            <td>Alamat Gudang</td>
            <td>Penanggung Jawab</td>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($daftarGudang as $gudang)
            <tr>
                <td>{{ $gudang->nama_gudang }}</td>
                <td>{{ $gudang->alamat_gudang }}</td>
                <td>{{ $gudang->penanggung_jawab }}</td>
                <td>{{ $gudang->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
