    <div>
    <table class="table table-striped text-center mt-4 shadow-lg p-3 mb-5 bg-white rounded">

        <div class="container">
            <div class="row">
                <div class="col">
                    <select class="form-select" wire:model.lazy="brand">
                        <option value="all">All</option>
                        <option value="Fender">Fender</option>
                        <option value="Ibanez">Ibanez</option>
                        <option value="Tagima">Tagima</option>
                        <option value="Gretsch">Gretsch</option>
                        <option value="Gibson">Gibson</option>
                        <option value="Guild">Guild</option>
                    </select>
                </div>
                <div class="col">
                        <select class="form-select" wire:model.lazy="material">
                        <option value="all">All</option>
                        <option value="Alder">Alder</option>
                        <option value="Basswood">Basswood</option>
                        <option value="Mahogany">Mahogany</option>
                        <option value="Maple">Maple</option>
                        <option value="Rosewood">Rosewood</option>
                        <option value="Ebony">Ebony</option>
                        </select>
                        
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Search" wire:model="search">
            </div>
            </div>
    
            
        </div>
        <thead class="table table-bordered">
            <tr>
                <th>Guitar Name</th>
                <th>Brand</th>
                <th>Material</th>
                <th>Year Model</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guitars as $guitar)
                <tr>
                    <td>{{ $guitar->guitar_name }}</td>
                    <td>{{ $guitar->brand }}</td>
                    <td>{{ $guitar->material }}</td>
                    <td>{{ $guitar->year_model }}</td>
                    <td>
                        <a href="{{ url('edit', ['guitar' => $guitar->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['guitar' => $guitar->id]) }}" class="btn btn-sm btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$guitars->links()}}
</div>

