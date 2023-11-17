<div class="tweet-nav mb-3">
    <!-- TODO: usersのIDと tweetsのIDを送信 -->
    <form action="../tweet/like.php" method="POST">
        <!-- ↑ Explanation: action="like.php" method="post -->
        <input type="hidden" name="user.id" value="<?= $user['id'] ?>">
        <!-- ↑ Explanation: name="user_id" -->
        <input type="hidden" name="tweet_id" value="<?= $tweet['id'] ?>">

        <?php if (in_array($tweet['id'], $user_likes)) : ?>
            <button class="btn btn-sm"><img src="../images/svg/heart_active.svg"></button>
            <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
        <?php else : ?>
            <button class="btn btn-sm"><img src="../images/svg/heart.svg"></button>
            <span class="like-count"><?= @$like_counts[$tweet['id']] ?></span>
        <?php endif ?>
    </form>
</div>

<!-- 2023-11-17 3.week9 試験問題解説 (↑ Explanation: ~)-->
