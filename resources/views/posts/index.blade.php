    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Notebook</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>All tasks</h1>
            <a href="/posts/create" class="btn btn-success">Add tasks</a>
            <br><br>
            <table align="left" style="width:61%" class="table">
                <thead>
                <tr >
                    <th style="text-align: center" width="5%" >ID</th>
                    <th style="text-align: center" width="50%">TITLE</th>
                    <th style="text-align: center" colspan="3" width="6%">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $post):?>
                <tr>
                    <td align="center"><?=$post['id']?></td>
                    <td><?=$post['title']?></td>
                    <td width="2%">
                        <a href="posts/{{$post['id']}} " class="btn btn-info">show</a>
                    </td >
                    <td width="2%">
                        <a href="posts/{{$post['id']}}/edit" class="btn btn-warning">edit</a>
                    </td>
                    <td width="2%">
                        <form action="/posts/{{$post['id']}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
