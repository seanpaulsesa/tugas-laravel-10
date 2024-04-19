  <x-app2-layout>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row justify-content-between align-items-center">
            <div class="col-auto">
              <h5 class="mb-0">Data Master Dosen {{ session()->get('a') }}</h5>
            </div>
            <div class="col-auto">
              <a href="{{ route('pdf', ['param' => 'guru', 'download' => 1]) }}" target="_blank" class="btn btn-sm btn-warning"><i class="bi bi-download"></i> Download PDF</a>
              <a href="{{ route('pdf', ['param' => 'guru']) }}" target="_blank" class="btn btn-sm btn-success"><i class="bi bi-printer"></i> Cetak PDF</a>
              <a href="{{ route('guru.create') }}" class="btn btn-sm btn-primary"><i class="bi bi-person-plus"></i> Tambah Data Guru</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead>
                <tr>
                  <th class="text-center" scope="col" style="width: 75px">No</th>
                  <th scope="col">NIP</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Alamat</th>
                  <th class="text-center" scope="col" style="width: 125px">Aksi</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @php
                  $no = 1;
                @endphp
                @foreach ($guru as $item)
                  <tr>
                    <th class="text-center" scope="row">{{ $no++ }}</th>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jk }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="{{ route('guru.update', $item->id) }}" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('guru.destroy', $item->id) }}" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </x-app2-layout>
