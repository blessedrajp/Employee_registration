@extends('Layout.Adminlayout')
@section('content')

<div class="container mb-5">
    <h3 class=" text-center text-primary">Add options</h3>
    <form action="{{route('store-mul-option')}}" method="post" id="muloptionadd" enctype=multipart/form-data class="mt-5">
        @csrf
                    <div class="mb-4" style="width:30%" class="mt-5">
                    <label for="Skill" class="form-label">Skill<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="skill" id="skill" class="skill">  
            @error('skill')
            <div class="text-danger">{{$message}}</div>
            @enderror
                    </div>

                    <div class="image mb-4">
                    <div class="image" style="width:30%">
                              <label for="image" class="form-label">skill image<span class="text-danger">*</span></label><br>
                              <input type="file" class="form-control" name="image" id="image" accept=".pnp,.jpg,.jpeg" onchange="loadFile(event)">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4zGCi3zopn2o_TNs3JU18b7GjJKEE_ZvW15Vwfjv4sXFIVQROwOAixqUtkwICmNhShbc&usqp=CAU" alt="preiew img" style="height: 50px; width:50px" class="mt-3" id="previewimage">
            @error('image')
            <div class="text-danger">{{$message}}</div>
            @enderror
                    </div>
                    </div>

                    <div class="status">
                        <label for="image" class="form-label">Status<span class="text-danger">*</span></label><br>
                        <label for="active"><input type="radio" value="active" name="status">Active</label>
                        <label for="inactive"><input type="radio" value="inactive" name="status">Inactive</label>
            @error('status')
            <div class="text-danger">{{$message}}</div>
            @enderror 
                    </div>

                        <button type="submit" class="btn bg-info mb-4 text-white mt-4" style="padding: 5px 30px;font-weight: 400;">Submit</button>


        </div>


<script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
            var output = document.getElementById('previewimage');
            output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
</script>

</form>
</div>
@endsection