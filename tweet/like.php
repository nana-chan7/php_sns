<?php
require_once "../env.php";
require_once "../app/controllers/TweetController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new TweetController();
    $controller->like();
} else {
    http_response_code(405); 
    echo json_encode(['error' => 'Method Not Allowed']);
}

// 2023-11-17 3.week9 試験問題解説
// ※ ① tweet/add.phpファイルからコピペ → like()に変更
// <?php
// require_once "../env.php";

// $controller = new TweetController();
// $controller->like();