<x-app-layout>

    <div class="container mt-5">

        <div class="col-md-6 mx-auto">

            <x-card
                title="Login"
                subtitle="Login to your account"
            >

                <form action="{{ route('login') }}" method="POST">

                    @csrf

                    <div class="mb-3">

                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error('email') is-invalid @enderror"
                        >

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mb-3">

                        <label for="password" class="form-label">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control @error('password') is-invalid @enderror"
                        >

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-check mb-3">

                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="form-check-input"
                        >

                        <label for="remember" class="form-check-label">
                            Remember me
                        </label>

                    </div>

                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                </form>

            </x-card>

        </div>

    </div>

</x-app-layout>