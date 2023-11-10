// api/tweet/like.php
<?php
require_once "../../env.php";
require_once "../../app/controllers/TweetController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new TweetController();
    $controller->like();
} else {
    // POST以外のメソッドのハンドリング
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Method Not Allowed']);
}
