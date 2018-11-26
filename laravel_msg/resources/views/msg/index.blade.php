<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h1>laravel 留言板 </h1>
    @include('common.message')
    <a href="{{ url('msg/add') }}">增加留言</a>
    <br>
    <table border="1" cellspacing="0" width="600">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>内容</th>
            <th>添加时间</th>
            <th>修改时间</th>
            <th width="120">操作</th>
        </tr>

        @foreach($msgs as $m)
        <tr>
            <th>{{ $m->id }}</th>
            <td>{{ $m->title }}</td>
            <td>{{ $m->content }}</td>
            <td>{{ $m->created_at }}</td>
            <td>{{ $m->updated_at }}</td>

            <td>
                <a href="{{ url('msg/delete', ['id' => $m->id]) }}"
                    onclick="if(confirm('确定要删除么？')==false) return false;"
                >删除</a>
                <a href="{{ url('msg/update', ['id' => $m->id]) }}">修改</a>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        {{ $msgs->render() }}
    </div>
</body>
</html>
