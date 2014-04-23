<?php include 'header.php'; ?>

<?php include_once 'navigation.php'; ?>

    <section id="latest-posts">

        <?php
        $recentPosts = getRecentPosts();
        if ($recentPosts['success'] === true) :
            foreach ($recentPosts as $post) :
        ?>
            <article class="post">
                <h1><?/*= $post['title']; */?></h1>
                <p><?/*= theExcerpt(['excerpt']); */?></p>
                <a href="post.php?id=<?/*= $post['ID']; */?>">Read More</a>
            </article>
        <?php
            endforeach;
            else :
        ?>
            <p>No posts to be found!</p>
        <?php endif; ?>

    </section>

<?php require 'sidebar.php'; ?>

<?php require_once 'footer.php'; ?>