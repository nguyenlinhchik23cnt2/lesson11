<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nlc danh sach nhacc can sua</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nlcnhacc.editsubmit')}}" method="post">
            @csrf
            <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiếtnhacc can sua</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nlcnanhcc" class="col-sm-2 col-form-label">ma nhacc</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" id="nlcnanhacc" name="nlcmancc" value="">
                    </div>
                  </div>
            </div>
            <div class="mb-3 row">
                <label for="nlctenkhoa" class="col-sm-2 col-form-label">ten nhacc</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="nlctennhacc" name="nlctenncc" value="">
                </div>
              </div>
            <div class="card-footer">
                <button class="btn btn-primary mx-2">submit</button>
                <a href="/khoas" class="btn btn-primary">Back</a>
            </div>
            </div>
        </form>
        </section>
</body>
</html>

