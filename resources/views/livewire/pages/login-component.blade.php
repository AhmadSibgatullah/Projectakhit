<div>
    <div class="row">
        <div class="col-8 ">

            <img class="" style="height: 135%; object-fit: cover;object-position: center;"
                src="{{ asset('assets/1.jpg') }}" alt="">

        </div>
        <div class="col-4 py-auto p-5 ">
            <div class="text-center my-5">
                <a href="#" class="navbar-brand navbar-brand-autodark"><img
                        src="{{ asset('assets/static/logo.svg') }}" height="36" alt=""></a>
            </div>

            <h2 class="card-title text-center mb-4">Login to your account</h2>
            <form wire:submit.prevent="handleLogin()" autocomplete="off" novalidate>
                <div class="mb-3">
                    <label class="form-label required">Email address</label>
                    <input type="email" wire:model="email" class="form-control" placeholder="your@email.com"
                        autocomplete="off">
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label required">
                        Password
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" wire:model="password" class="form-control" placeholder="Your password"
                            autocomplete="off">
                    </div>
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>
            </form>
            <div class="mt-5">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div>
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{-- </div>
        </div> --}}
</div>
</div>
