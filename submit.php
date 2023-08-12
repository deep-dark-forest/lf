<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $message = $_POST["message"];

    // 在这里处理表单数据，例如将其保存到文本文件中
    $file = fopen("messages.txt", "a");
    fwrite($file, $name . ": " . $message . "\n");
    fclose($file);

    echo "谢谢您的留言，" . $name . "！";
}
?>
