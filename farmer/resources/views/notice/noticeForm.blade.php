<div class="col-md-8">
    <form action="{{ route('notice.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="title">Notice Title</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="text" class="form-control" id="title" name="title" placeholder="Enter notice title" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="file">Notice File (PDF)</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="file" class="form-control" id="file" name="file" accept="application/pdf" required>
            </div>
        </div>
        
        <div class="form-group row">
            <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="publish_date">Publish Date</label>
            <div class="col-sm-8">
                <input style="border: #4B6F44 solid" type="date" class="form-control" id="publish_date" name="publish_date" required>
            </div>
        </div>
        
        <br>

        <button type="submit" class="btn" style="background:#4B6F44; color:white">Submit</button>
    </form>
</div>
