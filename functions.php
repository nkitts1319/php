<?php
require_once('connection.php');

function createData($post)
{
    createTodoData($post['content']);
}

//connection.php に記述した関数を呼び出す関数を実装していきます。
function getTodoList()
{
    return getAllRecords();
}
// Section12参照