<x-guest-layout>

<div class="container">

    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="col-md-5">

            <div class="card shadow border-0">

                <div class="card-header text-center bg-primary text-white py-4">

                    <h3 class="mb-1">
                        Sistem Pengajuan Surat Mahasiswa
                    </h3>

                    <small>
                        UNIVERSITAS PGRI MADIUN
                    </small>

                </div>

                <div class="card-body p-4">

                    <x-auth-session-status
                        class="mb-3"
                        :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                Username
                            </label>

                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                placeholder="Masukkan Username"
                                required
                                autofocus>

                            <x-input-error
                                :messages="$errors->get('username')"
                                class="mt-2" />

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan Password"
                                required>

                            <x-input-error
                                :messages="$errors->get('password')"
                                class="mt-2" />

                        </div>

                        <div class="d-grid">

                            <button
                                type="submit"
                                class="btn btn-primary">

                                Login

                            </button>

                        </div>

                    </form>

                    <hr>

                    <div class="text-center text-muted">

                        <small>

                            Login Demo

                            <br>

                            Username : admin

                            <br>

                            Password : 123

                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</x-guest-layout>