<div>
    <style>
        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
    <div class="row">
        <div class="col-xl-7" wire:loading>
            <img class="bg-img-cover bg-center" src="{{asset('static/loader.gif')}}" alt="looginpage"
                style="height: 100vh;width:auto">
        </div>
        <div class="col-xl-7" wire:loading.remove>
            <div
                style="background-image: url({{asset('static/bg.jpg')}});background-position:center;width:auto;height:100vh;padding:0">
                @if (isset($recommended_futsal))
                <div style="width: 70%;height:auto;position:relative;top:30%;left:20%">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <b>Name :</b><span class="text-muted">{{$recommended_futsal->name ?? "N/A"}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Address :</b><span class="text-muted">{{$recommended_futsal->address ??
                                        "N/A"}}</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone :</b><span class="text-muted">{{$recommended_futsal->phone ??
                                        "N/A"}}</span>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <b>Longitude :</b><span class="text-muted">{{$recommended_futsal->longitude
                                                ??
                                                "N/A"}}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <b>Latitude :</b><span class="text-muted">{{$recommended_futsal->latitude ??
                                                "N/A"}}</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="map-container-google-1" class="z-depth-1-half map-container"
                                    style="height: 500px">
                                    <iframe src="{{$recommended_futsal->map}}" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    {{-- <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light"
                                src="../assets/images/logo/login.png" alt="looginpage"><img class="img-fluid for-dark"
                                src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div> --}}
                    <div class="login-main">
                        <form wire:submit.prevent="recommend">
                            <h4>Futsal Recommendation</h4>
                            <p>Enter your location coordinates.</p>
                            <div class="form-group">
                                <label class="col-form-label">Longitude</label>
                                <input class="form-control" type="text" wire:model="longitude" required=""
                                    placeholder="85.310681541679" {{$loading ? 'disabled' : '' }}>
                                @error('longitude')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Latitude</label>
                                <input class="form-control" type="text" wire:model="latitude" required=""
                                    placeholder="27.696488573064" {{$loading ? 'disabled' : '' }}>
                                @error('latitude')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block w-100" type="submit" {{$loading ? 'disabled'
                                    : '' }}>{{$loading ? "Searching .." : "Recommend !"}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>