
                <form wire:submit.prevent='update'>
                    <div class="row">

                       <div class="container">

                        <div class="col-md-12">

                            <label class="form-label">Logo</label>
                            <input wire:model.lazy="user.name" type="file" class="form-control border border-2 p-2">
                            @error('user.name')
                            <p class='text-danger inputerror'>{{ $message }} </p>
                            @enderror
                        </div>



                    </div>
                    <button type="submit" class="btn bg-gradient-dark">Enregistrer</button>
                </form>

            </div>
        </div>

    </div>

</div>
