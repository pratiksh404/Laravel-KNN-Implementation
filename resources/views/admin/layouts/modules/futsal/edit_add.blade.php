<div class="row">
    <div class="col-lg-6">
        <label for="name">Name <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="text" name="name" id="name" class="form-control" value="{{$futsal->name ?? old('name')}}">
        </div>
    </div>
    <div class="col-lg-6">
        <label for="address">Address <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="text" name="address" id="address" class="form-control"
                value="{{$futsal->address ?? old('address')}}">
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-6">
        <label for="phone">Phone</label>
        <div class="input-group">
            <input type="number" name="phone" id="phone" class="form-control"
                value="{{$futsal->phone ?? old('phone')}}">
        </div>
    </div>
    <div class="col-lg-6">
        <label for="map">Map <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="text" name="map" id="map" class="form-control" value="{{$futsal->map ?? old('map')}}">
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-6">
        <label for="phone">Latitude <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="number" name="latitude" id="latitude" class="form-control"
                value="{{$futsal->latitude ?? old('latitude')}}">
        </div>
    </div>
    <div class="col-lg-6">
        <label for="longitude">Longitude <span class="text-danger">*</span></label>
        <div class="input-group">
            <input type="number" name="longitude" id="longitude" class="form-control"
                value="{{$futsal->longitude ?? old('longitude')}}">
        </div>
    </div>
</div>
<hr>
<x-adminetic-edit-add-button :model="$futsal ?? null" name="Futsal" />