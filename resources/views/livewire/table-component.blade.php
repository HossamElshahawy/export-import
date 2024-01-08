<div class="w-50 m-auto mt-5">
    @session('message')
        <div class="alert alert-success">{{ session('message') }}</div>
    @endsession
        <form method="POST" enctype="multipart/form-data" wire:submit="submitForm">
            @csrf

            <div class="form-group mb-4">
                <div class="custom-file text-left">
                    <input  wire:model="excel_file" type="file" class="custom-file-input">
                    @error('file') <span>{{ $message }}</span> @enderror
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <div class="spinner-border" role="status" wire:loading wire:target="excel_file">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Import Users</button>
            <a class="btn btn-success" href="" wire:click="export_excel">Export Users</a>
            <a class="btn btn-danger" href="" wire:click="delete_all">Delete All Users</a>

        </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
        </tr>
        </thead>
        <tbody>
            @forelse($courses as $course)
                <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->title}}</td>
                <td>{{$course->discription}}</td>
                </tr>
            @empty

            @endforelse

        </tbody>
    </table>

</div>
