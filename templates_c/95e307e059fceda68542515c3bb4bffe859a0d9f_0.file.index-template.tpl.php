<?php
/* Smarty version 3.1.34-dev-7, created on 2018-12-04 03:25:55
  from 'D:\xampp\htdocs\learn\templates\index-template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5c05e5b39ab769_60307205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95e307e059fceda68542515c3bb4bffe859a0d9f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\learn\\templates\\index-template.tpl',
      1 => 1543890354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c05e5b39ab769_60307205 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<title>blog</title>
</head>
<body>
    <form>
    <label for='title'>Заголовок </label><input type='text' name='title' id=title> <br>
        <label for='text'>Текст:</label> <br> <textarea type='text' name='text' id=text> </textarea><br>
   <input type='submit' value="Отправить">
    </form>
<h1><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h1>
<p><?php echo $_smarty_tpl->tpl_vars['post']->value->text;?>
</p>
</body>
</html><?php }
}
