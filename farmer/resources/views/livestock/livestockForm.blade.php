<div class="col-md-8">
    <form action="{{ route('livestock.store') }}" method="POST">
        @csrf
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="animal_type">Animal Type</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="animal_type" name="animal_type" placeholder="Enter animal type" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="breed">Breed</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="breed" name="breed" placeholder="Enter breed" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="quantity">Quantity</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="age">Age</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="number" class="form-control" id="age" name="age" placeholder="Enter age in months or years" required>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="gender">Gender</label>
            <div class="col-sm-6">
                <select style="border: #4B6F44 solid" class="form-control" id="gender" name="gender" required>
                    <option value="" disabled selected>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="health_status">Health Status</label>
            <div class="col-sm-6">
                <select style="border: #4B6F44 solid" class="form-control" id="health_status" name="health_status" required>
                    <option value="" disabled selected>Select health status</option>
                    <option value="Healthy">Healthy</option>
                    <option value="Sick">Sick</option>
                    <option value="Under Treatment">Under Treatment</option>
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="date_acquired">Date Acquired</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="date" class="form-control" id="date_acquired" name="date_acquired" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="location">Location</label>
            <div class="col-sm-6">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location" placeholder="Enter location" required>
            </div>
        </div>

        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-6 col-form-label text-white" for="notes">Notes</label>
            <div class="col-sm-6">
                <textarea style="border: #4B6F44 solid" class="form-control" id="notes" name="notes" rows="2" placeholder="Additional notes"></textarea>
            </div>
        </div>
        
        <br>

        <button type="submit" class="btn" style="background:#4B6F44; color:white">Submit</button>
    </form>
</div>
