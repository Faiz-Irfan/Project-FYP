<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proposal Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Project Proposal Form</h1>
        <h2>PSM 1</h2>
        <p>Session/Semester 2021/2022 </p>
    </div>

    

    <div class="container mt-5">
        <div class="row justify-content-center">
            
          <div class="col-md-6">
                <form action="{{ route('form.submitform') }}" method="post">
                    @csrf
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                            <span>{{ Session::get('success') }}</span>
                            </div>
                         @endif
                    <h3><b>SECTION A: STUDENT INFORMATION</b></h3>
                    <div class="mb-3">
                        <label class="form-label">Name </label><br>
                        <input type="text" class="form-control" name="name" value="" placeholder="Name">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Year/Course</label><br>
                        <input type="text" class="form-control" name="year" value="" placeholder="Year/Course">
                        <span class="text-danger">@error('year'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">IC. No.</label><br>
                        <input type="text" class="form-control" name="icno" value="" placeholder="IC. No.">
                        <span class="text-danger">@error('icno'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Matrix No.</label><br>
                        <input type="text" class="form-control" name="matrixno" value="" placeholder="Matrix No.">
                        <span class="text-danger">@error('matrixno'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label><br>
                        <input type="email" class="form-control" name="email" value="" placeholder="Email">
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mobile No.</label><br>
                        <input type="text" class="form-control" name="mobileno" value="" placeholder="Mobile No.">
                        <span class="text-danger">@error('mobileno'){{ $message }} @enderror</span>
                    </div>

                    <div class="mb-3">
                    <h3><b>SECTION B: PROJECT DETAILS</b></h3>
                    </div>
                        <div class="mb-3">
                            <label class="form-label">Supervisor Name: </label><br>
                            <input type="text" class="form-control" name="svname" value="" placeholder="Supervisor Name">
                            <span class="text-danger">@error('svname'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Project Title:</label><br>
                            <input type="text" class="form-control" name="project_title" value="" placeholder="Project Title"><br>
                            <span class="text-danger">@error('project_title'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Problem Background and Proposed Solution :</label><br>
                            <textarea class= "form-control" rows = "10" cols = "60" name = "problem_solution"></textarea>
                            <span class="text-danger">@error('problem_solution'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Objectives :</label><br>
                            <textarea class= "form-control" rows = "10" cols = "60" name = "objectives"></textarea>
                            <span class="text-danger">@error('objectives'){{ $message }} @enderror</span>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Scopes :</label><br>
                            <textarea class= "form-control" rows = "10" cols = "60" name = "scopes"></textarea>
                            <span class="text-danger">@error('scopes'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <h2>Project Requirements</h2>
                            <label class="form-label">Software:</label>
                            <input type="text" class="form-control" name="software" value="" placeholder=""><br>
                            <span class="text-danger">@error('software'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hardware:</label>
                            <input type="text" class="form-control" name="hardware" value="" placeholder=""><br>
                            <span class="text-danger">@error('hardware'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Technology/Technique/Method/Algorithm:</label>
                            <input type="text" class="form-control" name="method" value="Agile" placeholder=""><br>
                            <span class="text-danger">@error('method'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Network Elements:</label>
                            <input type="text" class="form-control" name="network" value="" placeholder=""><br>
                            <span class="text-danger">@error('network'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Security Elements:</label>
                            <input type="text" class="form-control" name="security" value="" placeholder=""><br>
                            <span class="text-danger">@error('security'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <p>Project Type:</p>
                            <input type="radio" class="" id="sys-dev" name="project_type" value="sys-dev">
                            <label class="form-label">System Development</label><br>
                            <input type="radio" class="" id="research" name="project_type" value="research">
                            <label class="form-label">Research</label>
                            <span class="text-danger">@error('project_type'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Project Area:</label>
                            <input type="text" class="form-control" name="area" value="" placeholder=""><br>
                            <span class="text-danger">@error('area'){{ $message }} @enderror</span>
                        </div>
                        
                        <h3><b>SECTION C: STUDENT ACKNOWLEDGMENT</b></h3>
                        
                        <div class="mb-3">
                        I confirm that this project is : <br>
                        <input type="radio" class="" id="own" name="owner" value="own">
                        <label class="form-label">My own idea</label><br>
                        <input type="radio" class="" id="supervisor" name="owner" value="supervisor">
                        <label class="form-label">Proposed by the supervisor</label>
                        <span class="text-danger">@error('owner'){{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date">
                        <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
          </div>
     
        </div>
      </div>
</body>
</html>