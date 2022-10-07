<div>
   <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-header text-center">
        <h3>Guitar Form</h3>
    </div>
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='guitar_name'>
            <label for="guitar_name">Guitar Name</label>
            @error('guitar_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <select name="brand" class="form-select" wire:model.defer="brand">
                <option hidden="true">Select Brand</option>
                <option selected disabled>Select Brand</option>
                <option value="Fender">Fender</option>
                <option value="Ibanez">Ibanez</option>
                <option value="Tagima">Tagima</option>
                <option value="Gretsch">Gretsch</option>
                <option value="Gibson">Gibson</option>
                <option value="Guild">Guild</option>
            </select>
            <label for="brand">Guitar Brand</label>
            @error('brand')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <select name="material" class="form-select" wire:model.defer="material">
                <option hidden="true">Select Material</option>
                <option selected disabled>Select Material</option>
                <option value="Alder">Alder</option>
                <option value="Basswood">Basswood</option>
                <option value="Mahogany">Mahogany</option>
                <option value="Maple">Maple</option>
                <option value="Rosewood">Rosewood</option>
                <option value="Ebony">Ebony</option>
            </select>
            <label for="material">Guitar Material</label>
            @error('material')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='year_model'>
            <label for="year_model">Year Model</label>
            @error('year_model')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <!-- <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.debounce.500ms='email'>
            <label for="email">Email</label>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div> -->

        
    <!-- 
            <div class="form-floating mb-3">
            <select name="guitar_name" class="form-select" wire:model.defer='guitar_name'>
                <option hidden="true">Choose Type</option>
                <option value="Stratocaster">Stratocaster</option>
                <option value="Telecaster">Telecaster</option>
            </select>
            <label for="guitar_name">Guitar Type</label>
            @error('guitar_name')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div> -->
         <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
            <button class="btn btn-success" type="submit" wire:click='addGuitar()'>
                Add Guitar
            </button>
         </div>
    </div>
   </div>
</div>
