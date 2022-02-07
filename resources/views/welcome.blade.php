<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="content">
 <div class="row">
     <div class="col-md-12">
         <div class="card-header">
             <h4>Add student
                 <a href="{{url('student')}}"class="btn btn-danger float-end">Shto Student</a>
             </h4>
         </div>

         <div class="card-body">
                <form action="" method="POST" enctype="miltipart/form-data>

                <div class="form-group mb-3">
                <label for="">Emri</label>
                <input name="name" type="text"class="form-control">
                </div>

                <div class="form-group mb-3">
                <label for="">Mbiemri</label>
                <input name="lastName" type="text"class="form-control">
                </div>

                <div class="form-group mb-3">
                <label for="">Emri</label>
                <input name="tech" type="text"class="form-control">
                </div>

                <div class="form-group mb-3">
                <label for="">Emri</label>
                <input name="file" type="text"class="form-control">
                </div>

                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Ruaj</button>
                </div>
                </form>
         </div>
     </div>
 </div>
</div>
</body>
</html>