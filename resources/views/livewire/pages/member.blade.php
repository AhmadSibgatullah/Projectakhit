@section('pageTitle', 'Member Account')
@section('button')
    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a href="{{ route('signup') }}" class="btn d-none d-sm-inline-block">
                create new member </a>
        </div>
    </div>
@endsection
<div>
    <div class="col-lg-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($showUser as $item)
                            @if ($item->id == 1)
                            @else
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-muted">
                                        {{ $item->name }}
                                    </td>
                                    <td class="text-muted">
                                        {{ $item->email }}
                                    </td>
                                    <td class="text-muted">

                                    </td>
                                    <td class="d-flex gap-1">
                                        <a href="" class="btn">Ubah</a>
                                        <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                                            action="" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
