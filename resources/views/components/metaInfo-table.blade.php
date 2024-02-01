<div class="table-responsive">
    <table class="table table-striped table-hover shadow border">
        <thead class="table-dark md-8">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Tag</th>
                <th scope="col">N° Articoli Collegati</th>
                <th scope="col">Aggiorna</th>
                <th scope="col">Elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($metaInfos as $metaInfo)
                <tr>
                    <th scope="row">{{ $metaInfo->id }}</th>
                    <td>{{ $metaInfo->name }}</td>
                    <td>{{ count($metaInfo->articles) }}</td>
                    @if ($metaType == 'tags')
                        <td>
                            <form action="{{ route('admin.editTag', ['tag' => $metaInfo]) }}" method="POST">
                                @csrf
                                @method('put')
                                <input type="text" name="name" placeholder="Nuovo Nome Tag" class="form-control customForm">
                                <button type="submit" title="Aggiorna" class="btn btn-info mt-2"><i class="fa-solid fa-rotate"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('admin.deleteTag', ['tag' => $metaInfo]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" title="Elimina" class="btn danger"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    @else
                        <td>
                            <form action="{{ route('admin.editCategory', ['category' => $metaInfo]) }}" method="POST">
                                @csrf
                                @method('put')
                                <input type="text" name="name" placeholder="Nuovo Nome Categoria" class="form-control customForm ">
                                <button type="submit" title="Aggiorna" class="btn btn-info mt-2"><i class="fa-solid fa-rotate"></i></button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('admin.deleteCategory', ['category' => $metaInfo]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" title="Elimina" class="btn danger"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
