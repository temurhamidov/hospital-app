
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>
<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
@include('admin.navbar')
<!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top: 100px;">

            <table>
                <tr style="background-color: black;">
                    <th style="padding: 13px;">Doctor Name</th>
                    <th style="padding: 13px;">Phone</th>
                    <th style="padding: 13px;">Speciality</th>
                    <th style="padding: 13px;">Room No</th>
                    <th style="padding: 13px;">Image</th>
                    <th style="padding: 13px;">Delete</th>
                    <th style="padding: 13px;">Update</th>

                </tr>
            @foreach($data as $doctor)
                <tr align="center" style="background-color: skyblue;">
                    <td>{{$doctor->name}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->specialty}}</td>
                    <td>{{$doctor->room}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td>

                    <td><a class="btn btn-danger" onclick="return confirm('Ishonchingiz komilmi buni uchirishga')" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>


                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id )}}">Update</a></td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
<!-- container-scroller -->
    <!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</div>
</body>
</html>
