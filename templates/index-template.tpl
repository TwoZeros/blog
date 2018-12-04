<html>
<head>
<title>blog</title>
</head>
<body>
    <form>
    <label for='title'>Заголовок </label><input type='text' name='title' id=title> <br>
        <label for='text'>Текст:</label> <br> <textarea type='text' name='text' id=text> </textarea><br>
   <input type='submit' value="Отправить">
    </form>
<h1>{$post->title}</h1>
<p>{$post->text}</p>
</body>
</html>