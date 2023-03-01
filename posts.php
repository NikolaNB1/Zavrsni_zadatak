<?php
foreach ($posts as $post) {
?>
    <div class="blog-post">
        <h2 class="blog-post-title"><a class="header" href="single_post.php?id=<?php echo $post['id'] ?>"><?php echo ($post['title']) ?></a></h2>
        <p class="blog-post-meta"><?php echo ($post['created_at']) ?>. by
            <span class="<?php echo ($post['pol'] == 'M') ? 'text-primary' : 'text-danger'; ?>">
                <?php echo $post['ime'] . ' ' . $post['prezime']; ?>
            </span>
        </p>
        <p><?php echo ($post['body']) ?></p>
    </div>
<?php } ?>