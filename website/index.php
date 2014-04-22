<?php include 'header.php'; ?>

<?php include_once 'navigation.php'; ?>

    <section id="latest-posts">

        <?php
        $recentPosts = getRecentPosts();
        foreach ($recentPosts as $post) :
        ?>
            <article class="post">
                <h1><?= $post['title']; ?></h1>
                <p><?= theExcerpt(['excerpt']); ?></p>
                <a href="/blog/post.php?id=<?= $post['ID']; ?>">Read More</a>
            </article>
        <?php endforeach; ?>

    </section>

<?php require 'sidebar.php'; ?>

<?php require_once 'footer.php'; ?>