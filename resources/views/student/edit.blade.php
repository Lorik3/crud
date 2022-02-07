
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



@if(session('status'))
<h6 class="alert alert-succes">{{session('status')}}</h6>
@endif

<div class="container">

    <div class="row">

        <div class="col-md-12">

        <div class="card">

            <div class="card-header">
            <h4>Edit Student
                <a href="{{url('student')}}"class="btn btn-danger float-end">Back</a>
            </h4>

            </div>

            <div class="card-body">
                <form action="{{url('update-student/'.$student->id)}}"method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="form-group mb-3">
                        <label for="">Emri</label>
                        <input type="text" name="name"value="{{$student->name}}" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                    <label for="">Mbiemri</label>
                    <input type="text"class="form-control"value="{{$student->lastName}}" name="lastName" >
                    </div>
                    
                    <div class="form-group mb-3">
                    <label for="">Tech</label>
                    <input type="text"class="form-control" value="{{$student->tech}}" name="tech" >
                    </div>

                    <div class="form-group mb-3">
                    <label for="">Foto</label>
                    <input type="file"class="form-control" name="profile_picture" >
                    <img src="{{asset('uploads/'.$student->profile_picture)}}"width="70px"height="70px"  alt="abc">    
                   
                </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>

        </div>

    </div>

</div>







