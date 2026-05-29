<x-app-admin>

<div class="container mt-5">

    <h1>Products</h1>

    <!-- Button Add -->
    <button class="btn btn-primary mb-3"
            data-bs-toggle="modal"
            data-bs-target="#addProductModal">

        Add Product

    </button>

    <!-- Table -->
    <table class="table table-striped">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name Product</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach($products as $product)

            <tr>

                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>

                <td>

                    <!-- Button Edit -->
                    <button class="btn btn-warning btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#editModal{{ $product->id }}">

                        Edit

                    </button>

                    <!-- Delete -->
                    <form action="{{ route('products.destroy', $product->id) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus?')">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>

            <!-- Modal Edit -->
            <div class="modal fade"
                 id="editModal{{ $product->id }}"
                 tabindex="-1">

                <div class="modal-dialog">

                    <div class="modal-content">

                        <form action="{{ route('products.update', $product->id) }}"
                              method="POST">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">

                                <h5 class="modal-title">
                                    Edit Product
                                </h5>

                                <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal">
                                </button>

                            </div>

                            <div class="modal-body">

                                <div class="mb-3">

                                    <label>Name Product</label>

                                    <input type="text"
                                           name="name"
                                           class="form-control"
                                           value="{{ $product->name }}">

                                </div>

                                <div class="mb-3">

                                    <label>Price</label>

                                    <input type="number"
                                           name="price"
                                           class="form-control"
                                           value="{{ $product->price }}">

                                </div>

                                <div class="mb-3">

                                    <label>Stock</label>

                                    <input type="number"
                                           name="stock"
                                           class="form-control"
                                           value="{{ $product->stock }}">

                                </div>

                            </div>

                            <div class="modal-footer">

                                <button class="btn btn-primary">
                                    Update
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            @endforeach

        </tbody>

    </table>

</div>

<!-- Modal Add -->
<div class="modal fade"
     id="addProductModal"
     tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{ route('products.store') }}"
                  method="POST">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        Add Product
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">

                        <label>Name Product</label>

                        <input type="text"
                               name="name"
                               class="form-control">

                    </div>

                    <div class="mb-3">

                        <label>Price</label>

                        <input type="number"
                               name="price"
                               class="form-control">

                    </div>

                    <div class="mb-3">

                        <label>Stock</label>

                        <input type="number"
                               name="stock"
                               class="form-control">

                    </div>

                </div>

                <div class="modal-footer">

                    <button class="btn btn-primary">
                        Save
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</x-app-layout>