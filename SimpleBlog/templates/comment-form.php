<?php
/**
 * @var $errors string
 * @var $commentData array
 */
?>

<?php //We'll user a rule-off for now, to seperate page secntions ?>
<hr />

<?php //Report any errors in a bullet-point list ?>
<?php if($errors): ?>
    <div style="border: 1px solid #ff6666; padding: 6px;">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<h3>Add your comment</h3>

<form method="post">
    <p>
        <label for="comment-name">Name: </label>
        <input type="text" id="comment-name" name="comment-name" value="<?php echo htmlEscape($commentData['name']) ?>"/>
    </p>
    <p>
        <label for="comment-website">Website: </label>
        <input type="text" id="comment-website" name="comment-website" value="<?php echo htmlEscape($commentData['website']) ?>"/>
    </p>
    <p>
        <label for="comment-text">Comment: </label>
        <textarea name="comment-text" id="comment-text" cols="70" rows="8"><?php echo htmlEscape($commentData['text']) ?></textarea>
    </p>

    <input type="submit" value="Submit comment" />
</form>