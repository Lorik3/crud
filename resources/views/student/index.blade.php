
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    

<div class="container">

    <div class="row">

        <div class="col-md-12">

         <div class="card">

            <div class="card-header">
                <h4>Simple CRUD
                <a href="{{url('add-student')}}"class="btn btn-danger float-end">Add </a>
                </h4>
            </div>

            <div class="card-body">

                    <table class="table table-bordered table-tripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Emri</th>
                                <th>Mbiemri</th>
                                <th>Tech</th>
                                <th>Foto</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($student as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->lastName}}</td>
                                <td>{{$item->tech}}</td>
                                <td>
                                    <img src="{{asset('uploads/'.$item->profile_picture)}}" width="70px"height="70px" alt="as">
                                </td>
                            
                            <td><a href="{{url('edit-student/'.$item->id)}}"class="btn btn-info btn-sm">Edit</a></td>
                            <td><a href="{{url('delete-student/'.$item->id)}}"class="btn btn-danger btn-sm">Delete</a>
                            </tr></td>
                            @endforeach
                        </tbody>
                    </table>
            </div>
         </div>

        </div>

    </div>

</div>







