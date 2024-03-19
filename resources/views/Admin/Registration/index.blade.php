@extends('Layout.Adminlayout')
@section('content')



<div class="registrationform d-flex justify-content-center">
    <div class="container">
    <h1 class="text-center">REGISTRATION</h1>
<form action="{{route('regstore')}}" method="post" id="registervalidate" enctype=multipart/form-data>
    @csrf
    <!-- name -->
        <div class="name d-flex mt-5" style="gap:30px">
            <div class="mb-4" style="width:30%">
                    <label for="firstname" class="form-label">First name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="firstname" id="firstname" class="firstname">  
            @error('firstname')
            <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
            
            <div class="mb-4" style="width:30%">
                    <label for="lasttname" class="form-label">Last name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="lastname" id="lastname" class="lastname">  
            @error('firstname')
            <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
            
        </div>
        <!-- email -->
        <div class="mb-4" style="width: 62%;">
                    <label for="exampleInputEmail1" class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" class="email">
        </div>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        <!-- confrm email -->
        <div class="mb-4" style="width: 62%;">
                    <label for="exampleInputEmail1" class="form-label">Alternative Email</label>
                    <input type="email" class="form-control" id="conform-email" name="altemail" class="Alt-email">
        </div>
        <!-- paswd -->
        <div class="name d-flex" style="gap:30px">
            <div class="mb-4" style="width:30%">
                    <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" id="Password" class="Password"> 
                    <!-- <span class="toggle-password" onclick="togglePassword()">
                    <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    </span>  -->
            @error('password')
            <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
           
            <div class="mb-4" style="width:30%">
                    <label class="form-label">Conform Password<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="conform_password" id="conform-password" class="conform-password">
                    <!-- <span class="toggle-password" onclick="togglePassword()">
                    <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    </span>  -->
            </div>
        </div>
        <!-- gender -->
        <div class="gender mb-4" style="width:350px">
            <label for="gender" class="form-label">Gender<span class="text-danger">*</span></label><br>
            <div class="mb-4 mt-2">
            <label for="">Male</label>
            <input type="radio" class="pl-2 pt-1" value="male" name="gender" id="male">
            <label for="" class="" style="padding-left:10px">Female</label>
            <input type="radio" class="pt-1"  value="female" name="gender" id="female">
            <label for="" class="" style="padding-left:10px">other</label>
            <input type="radio" class="pt-1" value="other" name="gender" id="other">
            </div>     
            <span class="error"></span>
        </div>
        @error('gender')
            <div class="text-danger">{{$message}}</div>
            @enderror
        <!-- dob -->
        <div class="mb-4" style="width:30%">
                    <label class="form-label">Date of Birth<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="dob" id="dob" class="dob">  
        </div>
        @error('dob')
            <div class="text-danger">{{$message}}</div>
            @enderror
        <!-- mob number -->
        <div class="name d-flex" style="gap:30px">
            <div class="mb-4" style="width:30%">
                    <label class="form-label">Mobile Number<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" name="number" id="number" class="number">
            @error('number')
            <div class="text-danger">{{$message}}</div>
            @enderror  
            </div>
            
            <div class="mb-4" style="width:30%">
                    <label class="form-label">Alternative number</label>
                    <input type="text" class="form-control" name="altnumber" id="altnumber" class="altnumber">  
            </div>
        </div>

        <!-- <select class="country" multiple="true" style="width: 200px;"> 
                <option value="1">India</option> 
                <option value="2">Japan</option> 
                <option value="3">France</option> 
        </select> -->
        <div class="place d-flex" style="gap:30px">
        <div class="mb-4" style="width:30%">
                            <label class="form-label" for="inputGroupSelect02">Country<span class="text-danger">*</span></label><br>
                            <select class="js-example-basic-single form-control" name="country" id="country" >
                                <option value="">Choose...</option>
                                <option value="Africa">Africa</option>
                                <option value="Antartica">Antartica</option>
                                <option value="Europe">Europe</option>
                                <option value="brazil">brazil</option>
                                <option value="rome">rome</option>
                                <option value="Alabama">Alabama</option>
                                <option value="californiya">californiya</option>
                                <option value="india">india</option>
                            </select>
            @error('country')
            <div class="text-danger">{{$message}}</div>
            @enderror 
        </div>
        <div class="mb-4"  style="width:30%">
                            <label class="form-label" for="inputGroupSelect02">City<span class="text-danger">*</span></label><br>
                            <select class="form-control" name="city" id="city">
                                <option value="">Choose...</option>
                                <option value="assam">assam</option>
                                <option value="karnataka">karnataka</option>
                                <option value="telungana">telungana</option>
                                <option value="andra">andra</option>
                                <option value="up">up</option>
                                <option value="maharastra">maharastra</option>
                                <option value="kerala">kerala</option>
                                <option value="tamilnadu">tamilnadu</option>
                            </select>
            @error('city')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        </div>
        <!-- address -->
        <div class="address mb-4" style="width: 62%;">
        <label class="form-label" for="inputGroupSelect02">Address<span class="text-danger">*</span></label><br>
            <!-- <textarea name="" id="" cols="60" rows=""></textarea> -->
            <input type="text" class="form-control" name="address" id="address" class="address">
            @error('address')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <!-- resume -->
        <div class="address mb-4" style="width:30%">
            <label class="form-label" for="inputGroupSelect02">Resume<span class="text-danger">*</span></label><br>
            <input type="file" class="form-control" name="resume" accept=".pdf,.doc,.docx" id="resume" class="resume"> 
            @error('resume')
            <div class="text-danger">{{$message}}</div>
            @enderror 
        </div>
        <!-- skills -->
        <div class="mb-4" style="width:30%">
                            <label class="form-label" for="inputGroupSelect02">Skills<span class="text-danger">*</span></label><br>
                            <select class="skills form-control" name="skills[]" multiple="true" id="skills">
                                @foreach($optionshow as $optionshow)
                                <option value="{{$optionshow->id}}">{{$optionshow->skill}}</option>
                                <!-- <option value="C++">C++</option>
                                <option value="JAVA">JAVA</option>
                                <option value="Python">Python</option>
                                <option value="Php">Php</option>
                                <option value="React">React</option>
                                <option value="Js">JavaScript</option>
                                <option value="WY">Ruby</option> -->
                              @endforeach
                            </select>
            @error('skills')
            <div class="text-danger">{{$message}}</div>
            @enderror 
        </div>
        <!-- image -->
        <div class="photo mb-4">
                    <div class="image" style="width:30%">
                              <label for="image" class="form-label">Recent Photo<span class="text-danger">*</span></label><br>
                              <input type="file" class="form-control" name="photo" id="photo" accept=".pnp,.jpg,.jpeg" onchange="loadFile(event)">
                              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4zGCi3zopn2o_TNs3JU18b7GjJKEE_ZvW15Vwfjv4sXFIVQROwOAixqUtkwICmNhShbc&usqp=CAU" alt="preiew img" style="height: 50px; width:50px" class="mt-3" id="previewimage">
                    </div>

            @error('photo')
            <div class="text-danger">{{$message}}</div>
            @enderror 
        </div>
        <!-- cover letter -->
        <div class="address mb-4">
        <label class="form-label" for="inputGroupSelect02">Cover letter (optional)</label><br>
            <textarea name="coverletter" id="" cols="100" rows="10"></textarea>
            <!-- <input type="text" class="form-control" name="address" id="address" class="address"> -->
            @error('coverletter')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

  <div class="mb-4 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms" value="true" onchange="this.value = this.checked ? 'true' : 'false'">
    <label class="form-check-label" for="exampleCheck1">Agree Terms and Conditions<span class="text-danger">*</span></label>
    @error('terms')
            <div class="text-danger">{{$message}}</div>
    @enderror
  </div>

  
  <button type="submit" class="btn bg-info mb-4 text-white" style="padding: 5px 30px;font-weight: 400;">Submit</button>
</form>

 

<div class="option">
    <a href="{{route('show-mul-option')}}" class="btn btn-info mb-2">Show multi option</a>
</div>
        
        
    </div>
    
</div>




<!-- preview image -->
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
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- formvalidate cdn -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<!-- validation -->
  <script>
    var j=jQuery;
    j(document).ready(function () {
        j("#registervalidate").validate({
            rules: {
                firstname: {
                    required: true,
                    minlength: 2,
                },
                lastname: {
                    required: true,
                    minlength: 2,
                },
                email: {
                    required: true,
                    email:true,
                    emailRegex: true
                },
                altemail: {
                    email:true
                },
                password: {
                    required: true,
                    // minlength: 6,
                    passwordRegex: true
                },
                conform_password:{
                    required: true,
                    equalTo:"#Password",
                },
                gender:{
                    required:true
                },
                dob:{
                    required:true
                },
                number:{
                    required: true,
                    minlength: 10
                    // numberRegex: true
                },
                altnumber:{
                    minlength: 10
                },
                country:{
                    required:true
                },
                city:{
                    required:true
                },
                address:{
                    required:true
                },
                resume:{
                    required:true,
                    // extension: "pdf|doc|docx"
                    
                },
                "skills[]":{
                    required:true,
                },
                photo:{
                    required: true,
                    // accept: "image/*", 
                    // extension: "jpg|jpeg|png|gif"
                },
                terms:{
                    required:true
                }
            },
            messages: {
                firstname: {
                    required: "Please enter Your Firstname.",
                    minlength: "minumum 2 character",
                },
                lastname: {
                    required: "Please enter Your lasttname.",
                    minlength: "minumum 2 character",
                },
                email: {
                    required: "Please enter Your email.",
                    // email:"Enter the Valid Email",
                    emailRegex:"Please enter a valid email address"
                },
                altemail: {
                    email:"Enter valid Email"
                },
                password: {
                    required: "Please provide a password",
                    // minlength: "minumum 6 character",
                    passwordRegex: "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character"
                },
                conform_password: {
                    required: "Please confirm your password",
                    equalTo: "Passwords do not match"
                },
                gender:{
                    required:"please specify your gender" 
                },
                dob:{
                    required:"please select Your Date Of Birth" 
                },
                number: {
                    required: "Please enter Your Mobile number.",
                    // numberRegex:"Enter the Valid Mobile number"
                    minlength: "enter valid mobile number",

                },
                altnumber:{
                    minlength:"enter valid Number"
                },
                country:{
                    required:"please select your country"
                },
                city:{
                    required:"please select your country"
                },
                address:{
                    required:"please enter your address"
                },
                resume:{
                    required: "Please select a file",
                    // extension: "Please select a PDF or Word file"
                },
                "skills[]":{
                    required: "Please specify your skills"
                },
                photo:{
                    required: "Please select an image file",
                    // accept: "Please select a valid image file",
                    // extension: "Please select a JPG, JPEG, PNG, or GIF image file"
                },
                terms:{
                    required:"accept terms and conditions"
                }
            },
            // errorPlacement: function(error, element) {
            // // Display error message after the input field
            // error.insertAfter(element);
            // },
            // highlight: function(element, errorClass, validClass) {
            //     // Add error class to input field
            //     $(element).addClass(errorClass).removeClass(validClass);
            // },
            // unhighlight: function(element, errorClass, validClass) {
            //     // Remove error class from input field
            //     $(element).removeClass(errorClass).addClass(validClass);
            // },
            // errorClass: "error", // Class applied to the error message container
            // errorElement: "span", // Container element for the error message
            // errorPlacement: function(error, element) {
            //     // Customize where and how the error message is displayed
            //     error.addClass("error-message");
            //     error.insertAfter(element);
            // },
            submitHandler: function(form) {
                form.submit();
            }
            
        });
    // email regrex
    $.validator.addMethod("emailRegex", function(value, element) {
    return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
    }, "Please enter a valid email address");

    // password regrex
    $.validator.addMethod("passwordRegex", function(value, element) {
        return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{"':;?])(?=.*[a-zA-Z]).{6,}$/.test(value);
    }, "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character");

    // number regrex
    // $.validator.addMethod("numberRegex", function(value, element) {
    // return /^(\+\d{1,3}[- ]?)?\d{10}$/.test(value);
    // }, "Please enter a valid Number");

    });

    
  </script>

  <!-- select2 -->
  <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> 
      </script>
  <script src= "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script> 
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"/> 

<script> 
            $(document).ready(function () { 
                //Select2 
                $(".skills").select2({ 
                    maximumSelectionLength: 4, 
                });  
            }); 
        </script>
        



@endsection