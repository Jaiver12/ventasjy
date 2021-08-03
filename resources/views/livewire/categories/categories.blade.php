<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $componentName }}| {{ $pageTitle }}</h6>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary bg-dark " data-toggle="modal" data-target="#theModal">Agrear</a>
        </div>

        <div class="p-3">
            @include('comun.searchbox')
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td><img src="{{ asset('storage/categories' . $category->image) }}" alt=""></td>
                            <td>
                                <a href="javascript:void(0)"
                                wire:click="Edit({{ $category->id }})"
                                class="btn btn-sm btn-dark" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="javascript:void(0)"
                                onclick="Confirm('{{ $category->id }}')"
                                class="btn btn-sm btn-dark" title="delete">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>

</div>



@include('livewire.categories.form')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show');
        });
    });
</script>