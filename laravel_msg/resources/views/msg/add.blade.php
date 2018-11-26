<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>添加留言</h1>

    <div>
        <form action="" method="post" enctype="multipart/form-data">
             @csrf
            <div>
                <p>
                    标题：<input type="text" name="User[title]">
                </p>
                <p>
                    {{ $errors->first('User.title') }}
                </p>
            </div>

            <div>
                <p>
                    内容：<textarea name="User[content]" id="" cols="30" rows="10"></textarea>
                </p>
                <p>
                    {{ $errors->first('User.content') }}
                </p>
            </div>


            <input type="submit" value="提交">
        </form>

    </div>



</body>
</html>
