@section('pageTitle', 'Create PemesananBarang')
@section('button')
    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a href="{{ route('MenejemenToko.PemesananBarang.index') }}" class="btn d-none d-sm-inline-block">
                <-- Back </a>
        </div>
    </div>
@endsection

<div>
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

<div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form wire:submit.prevent="createForm" action="{{ route('MenejemenToko.PemesananBarang.store') }}" method="POST"
                        autocomplete="off">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label required">name PemesananBarang</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Input name PemesananBarang">
                                        @error('name')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label required">Amount</label>
                                        <input type="number" min="0" max="999999999999999999999999999"
                                            class="form-control" name="amount" placeholder="Input an Amount">
                                        @error('amount')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Select Account Bank</label>
                                        <select type="text" class="form-select tomselected ts-hidden-accessible"
                                            id="select-people" value="" name="account" tabindex="-1">
                                            @foreach ($showUser as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 mb-0">
                                        <label class="form-label required">Description</label>
                                        <textarea rows="5" class="form-control" name="description" placeholder="your description" style="height: 150px;"></textarea>
                                        @error('description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
