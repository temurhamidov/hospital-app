
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
                    <th style="padding: 13px;">Customer Name</th>
                    <th style="padding: 13px;">Email</th>
                    <th style="padding: 13px;">Phone</th>
                    <th style="padding: 13px;">Doctor</th>
                    <th style="padding: 13px;">Date</th>
                    <th style="padding: 13px;">Message</th>
                    <th style="padding: 13px;">Status</th>
                    <th style="padding: 13px;">Approved</th>
                    <th style="padding: 13px;">Cancel</th>
                    <th style="padding: 13px;">Send Mail</th>
                </tr>
                @foreach($data as $appoint)

                <tr align="center" style="background-color: skyblue;">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td>
                        <a class="btn btn-success" href="{{url('approved', $appoint->id)}}">Approved</a>
                    </td>

                    <td>
                        <a class="btn btn-danger" href="{{url('canceled', $appoint->id)}}">Canceled</a>
                    </td>


                    <td>
                        <a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}">Send Mail</a>
                    </td>

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
