    <div class="">
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Changer le logo</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <form method="POST" action="{{ url('tables')}}">
                                    <div class="row">
<div class="container">
                                        <div class="mb-5 col-md-9">

                                            <label class="form-label">Logo</label>
                                            <input name="image"  type="file" class="form-control border border-2 p-2">
                                            @error('user.email')
                                            <p class='text-danger inputerror'>{{ $message }} </p>
                                            @enderror

                                    <button type="submit" class="btn bg-gradient-dark">Enregistrer</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
