<?php include 'header.php'; ?>

<?php include 'navigation.php'; ?>

    <section id="blog">

        <?php
        // pagination will be an exercise for the students
        $posts = getAllPosts();
        foreach ($posts as $post) :
        ?>
        <article class="post post-id-<?= $post['ID']; ?>">
            <h1><?= $post['title']; ?></h1>
            <p><?= theExcerpt(['excerpt']); ?></p>
            <a href="/blog/post.php?id=<?= $post['ID']; ?>">Read More</a>
        </article>
        <?php endforeach; ?>

    </section>

<?php include 'sidebar.php'; ?>

<?php include 'footer.php'; ?>