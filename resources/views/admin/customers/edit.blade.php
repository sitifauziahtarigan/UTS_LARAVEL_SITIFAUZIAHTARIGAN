<x-app-admin>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-body">

            <h1>Edit Customer</h1>

            <form action="/customers/{{ $customer->id }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Kode</label>
                    <input type="text"
                           name="kode"
                           class="form-control"
                           value="{{ $customer->kode }}">
                </div>

                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text"
                           name="nama"
                           class="form-control"
                           value="{{ $customer->nama }}">
                </div>

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat"
                              class="form-control">{{ $customer->alamat }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Telepon</label>
                    <input type="text"
                           name="telepon"
                           class="form-control"
                           value="{{ $customer->telepon }}">
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="{{ $customer->email }}">
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>

</x-app-admin>