<div class="top-menu">
    <div class="menu-options">
        <?php if(isLoggedIn()): ?>
            <a href="edit-post.php">New post</a>
            Hello <?php echo htmlEscape(getAuthUser()) ?>.
            <a href="logout.php">Log out</a>
        <?php else: ?>
            <a href="login.php">Log in</a>
        <?php endif ?>
    </div>
</div>

<a href="index.php">
    <h1>Blog Title</h1>
</a>
<p>This paragraph summarises what the blog id about.</p>