<x-app-admin>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h1 class="mb-4">Data Customers</h1>

            <a href="/customers/create" class="btn btn-primary mb-3">
                Tambah Customer
            </a>

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($customers as $customer)

                    <tr>
                        <td>{{ $customer->kode }}</td>
                        <td>{{ $customer->nama }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->telepon }}</td>
                        <td>{{ $customer->email }}</td>

                        <td>

                            <a href="/customers/{{ $customer->id }}/edit"
                               class="btn btn-warning btn-sm">
                               Edit
                            </a>

                            <form action="/customers/{{ $customer->id }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>