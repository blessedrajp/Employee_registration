@extends('Layout.Adminlayout')
@section('content')




<!-- <div class="canddetails">
    <div class="container">
        <div class="candimg ml-auto  d-flex flex-end">
        <img src="" alt="candimg" style="height:100px; width:100px" class="mt-3" id="previewimage">
        </div>

        <div class="cand-data">
            <label for="firstname" class="mb-3">firstname:</label><p></p><br>
            <label for="lastname" class="mb-3">lastname:</label><p></p><br>
            <label for="email" class="mb-3">email:</label><p></p><br>
            <label for="altemail" class="mb-3">altemail:</label><p></p><br>
            <label for="password" class="mb-3">password:</label><p></p><br>
            <label for="gender"class="mb-3" >gender:</label><p></p><br>
            <label for="dob" class="mb-3">dob:</label><br>
            <label for="number" class="mb-3">number:</label><p></p><br>
            <label for="altnumber" class="mb-3">altnumber:</label><p></p><br>
            <label for="" class="mb-3">country:</label><p></p><br>
            <label for="city" class="mb-3">city:</label><p></p><br>
            <label for="address" class="mb-3">address:</label><p></p><br>
            <label for="resume" class="mb-3">resume:</label><p></p><br>
            <label for="skills" class="mb-3">skills:</label><p></p><br>
            <label for="skills" class="mb-3">coverletter:</label><p></p><br>
            <label for="skills" class="mb-3">terms:</label><p></p><br>

        </div>
    </div>
</div> -->

<div class="container-fluid">
<table class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>name</th>
									<th>Gender</th>
									<th>Email</th>
									<th>Number</th>
									<th>Skills</th>
                                    <th>image</th>
									<th>status</th>
                                    <th>edit</th>
                                    <th>delete</th>
								</tr>
							</thead>
							<tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($alldata as $Userdata)
								<tr>
									<th scope="row">{{$i}}</th>
									<td><span>{{$Userdata->firstname}}</span><span>{{$Userdata->lastname}}</span></td>
									<td>{{$Userdata->gender}}</td>
									<td>{{$Userdata->email}}</td>
									<td>{{$Userdata->number}}</td>
                                   
                                    <td>{{$Userdata->skills}}</td>
                                    
									<td><img src="{{$Userdata->photo}}" alt="" style="height:50px;width:50px"></td>
								</tr>
                                @php
                                $i++;
                                @endphp
                                @endforeach
							</tbody>
						</table>


    <div class="option">
        <a href="{{route('candidate-add')}}" class="btn btn-info">Add user</a>
    </div>
</div>
</div>



@endsection