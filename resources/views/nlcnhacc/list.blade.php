<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>danh sach nha cung cap</title>
    <link rel="stylesheet"hrel="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>danh sach nha cung cap</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ma nha cung cap</th>
                    <th>ten nha cung cap</th>
                    <th>dia chi</th>
                    <th>dien thoai</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nlcmanhaccs as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item->nlcnanhacc}}</td>
                        <td>{{$item->nlctennhacc}}</td>
                        <td>{{$item->nlcdiachi}}</td>
                        <td>{{$item->nlcdienthoai}}</td>
                        <td>
                            view/edit/delete
                        </td>
                    </tr>
                    @empty($record)
                        <tr>
                            <td colspan="7">chua co du lieu</td>
                        </tr>
                    @endempty
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary ">them moi</button>
    </section>
</body>
</html>