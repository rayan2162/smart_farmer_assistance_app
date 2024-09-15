<div class="col-md-8">
    <form action="{{ route('equipment.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="name">Equipment Name</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="name" name="name" placeholder="Enter Equipment name" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="type">Equipment Type</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="type" name="type" placeholder="Enter Equipment type" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="manufacturer">Manufacturer</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Enter Manufacturer" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="purchase_date">Purchase Date</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="date" class="form-control" id="purchase_date" name="purchase_date" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="cost">Cost</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="number" step="0.01" class="form-control" id="cost" name="cost" placeholder="Enter cost" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="condition">Condition</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="condition" name="condition" placeholder="Enter condition" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="location">Location</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location" placeholder="Enter location" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="notes">Notes</label>
            <div class="col-sm-8">
                <textarea class="form-control" id="notes" name="notes" rows="2" placeholder="Additional notes"></textarea>
            </div>
        </div>
        
        <br>

        <button type="submit" class="btn" style="background:#4B6F44; color:white">Submit</button>
    </form>
</div>
