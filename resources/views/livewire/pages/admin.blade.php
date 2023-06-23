@section('pageTitle', 'Admin Account')


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
                        <tr>
                            <td>{{ auth()->user()->id }}</td>
                            <td class="text-muted">
                                {{ auth()->user()->name }}
                            </td>
                            <td class="text-muted">
                                {{ auth()->user()->email }}
                            </td>
                            <td class="text-muted">

                            </td>
                            <td class="d-flex gap-1">
                                <a href="" class="btn">Ubah</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
