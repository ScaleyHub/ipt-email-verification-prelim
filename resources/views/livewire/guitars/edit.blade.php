
<div>
    <div class="container">
    <div class="card">
     <div class="card-header">
         <h3>Edit Guitar</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='guitar_name'>
             <label for="guitar_name">Guitar Name</label>
             @error('guitar_name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
 
         {{-- <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.debounce.500ms='brand'>
             <label for="brand">Brand</label>
             @error('brand')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div> --}}
 
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='material'>
             <label for="material">Material</label>
             @error('material')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
 
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='year_model'>
             <label for="year_model">Year Model</label>
             @error('year_model')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
 
         <div class="form-floating mb-3">
            <select name="guitar_name" class="form-select" wire:model.defer='guitar_name'>
             <option hidden="true">Select Preferred Pick-up </option>
             <option selected disabled>Select Pick-Up</option>
             <option value="Humbucker.">Humbucker</option>
             <option value="Single Coil">Single Coil</option>
            </select>
            <label for="guitar_name">Guitar Name</label>
            @error('guitar_name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>
          <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
            <button class="btn btn-success" wire:click="editGuitar()">
                Save Changes
            </button>
            <button class="btn btn-info mx-2" wire:click="back()">
                back
            </button>
        </div>
     </div>
    </div>
 </div>
 
</div>
