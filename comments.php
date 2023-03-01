<ul style="list-style-type: none;">
    <?php foreach ($comments as $comment) { ?>
        <li>
            <hr>
            <p class="blog-post-meta">Comment by:
                <span class="<?php echo ($comment['pol'] == 'M') ? 'text-primary' : 'text-danger'; ?>">
                    <?php echo $comment['ime'] . ' ' . $comment['prezime']; ?>
                </span>
            </p>
            <p><?php echo $comment['text'] ?></p>
            <hr>
        </li>
    <?php } ?>
</ul>