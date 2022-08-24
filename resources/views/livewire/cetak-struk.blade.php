<div>
    <button type="button" class="btn btn-primary" wire:click="createPDF"> 
        {{ __('Cetak PDF') }}
    </button>
    <div class="container mt-3">
        <h1 class="">Cetak Struk</h1>
        <div class="m-3">
            <table>
                <tr>
                    <td>Invoice</td>
                    <td>:</td>
                    <td>0123456</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>Usep Subang</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>usepsubang123@gmail.com</td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td>:</td>
                    <td>081212345678</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>Jl. Sesama No. 100</td>
                </tr>
            </table>
        </div>
        <div class="m-3">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Link</th>
                <th scope="col">Content</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                <td>{{ $data->title }}</td>
                <td>{{ $data->slug }}</td>
                <td>{!! \Illuminate\Support\Str::limit($data->content, 30, '...') !!}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div> 
</div>
