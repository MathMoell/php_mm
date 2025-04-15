<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'add') {
        $pealkiri = trim($_POST['title']);
        $sisu = trim($_POST['content']);
        
        if (!empty($pealkiri) && !empty($sisu)) {
            $postitus = $pealkiri . '|' . $sisu;
            file_put_contents('posts.txt', $postitus . PHP_EOL, FILE_APPEND);
            header('Location: ?page=avaleht');
            exit;
        } else {
            echo "Palun täitke kõik väljad!";
        }
    }
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        $index = (int)$_POST['index'];
        $postitused = file('posts.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if (isset($postitused[$index])) {
            unset($postitused[$index]);
            file_put_contents('posts.txt', implode(PHP_EOL, $postitused) . PHP_EOL);
            header('Location: ?page=admin');
            exit;
        }
    }
}
?>
