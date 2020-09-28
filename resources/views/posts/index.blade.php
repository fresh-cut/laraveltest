    <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <title>Notebook</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 sidebar">
            <ul class="sidebar-menu list-unstyled">
                <li class="sidebar-menu-item"><a class="sidebar-menu-link" href="#1">1</a></li>
                <li class="sidebar-menu-item"><a class="sidebar-menu-link" href="#2">2</a></li>
                <li class="sidebar-menu-item"><a class="sidebar-menu-link" href="#3">3</a></li>
            </ul>
        </div>
        <div class="col-9">
            <h1>All tasks</h1>
            <a href="/posts/create" class="btn btn-success">Add tasks</a>
            <br><br>
            <table class="table">
                <thead>
                <tr style="text-align: center">
                    <th>ID</th>
                    <th>TITLE</th>
                    <th colspan="3">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $post):?>
                <tr>
                    <td align="center" width="5%"><?=$post['id']?></td>
                    <td ><?=$post['title']?></td>
                    <td width="5%">
                        <a href="posts/{{$post['id']}} " class="btn btn-info">show</a>
                    </td>
                    <td width="5%">
                        <a href="posts/{{$post['id']}}/edit" class="btn btn-warning">edit</a>
                    </td>
                    <td width="5%">
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
<script scr="asset('js/app.js')"></script>
</body>
</html>
