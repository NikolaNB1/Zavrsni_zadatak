<ul style="list-style-type: none;">
    <?php foreach ($comments as $comment) {
        if ($comment['pol'] === 'M') {
            $boja = 'blue';
        } else {
            $boja = 'rgb(255, 131, 152)';
        };
    ?>
        <li>
            <hr>
            <p class="blog-post-meta">Comment by:
                <span style="color: <?php echo $boja; ?>">
                    <?php echo $comment['ime'] . ' ' . $comment['prezime']; ?>
                </span>
            </p>
            <p><?php echo $comment['text'] ?></p>
            <hr>
        </li>
    <?php } ?>
</ul>