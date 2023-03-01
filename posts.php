<?php
foreach ($posts as $post) {
    if ($post['pol'] === 'M') {
        $boja = 'blue';
    } else {
        $boja = 'rgb(255, 131, 152)';
    };
?>
    <div class="blog-post">
        <h2 class="blog-post-title"><a class="header" href="single_post.php?id=<?php echo $post['id'] ?>"><?php echo ($post['title']) ?></a></h2>
        <p class="blog-post-meta"><?php echo ($post['created_at']) ?>. by
            <span style="color: <?php echo $boja; ?>">
                <?php echo $post['ime'] . ' ' . $post['prezime']; ?>
            </span>
        </p>
        <p><?php echo ($post['body']) ?></p>
    </div>
<?php } ?>