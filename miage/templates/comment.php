<div class="box_title">
    <h1>Comments</h1><br>
</div>
<?php

if (!isset($_SESSION['login']) or empty($_SESSION['login'])) {
    echo '<div id="box_center"><h4>You have to be a member to write a comment.
            <br>
            Register <a href="?page=client&action=create">here</a> or login <a href="?page=client&action=read">here</a>. </h4></div><br><br>';
} else {

?>
    <div class="table_container2">
        <form method="POST" action="?page=comment&action=create&id=<?= $_GET['id']; ?>" accept-charset="utf-8">

            <table class="table_comments">
                <tr>
                    <td>
                        <?= $_SESSION['login']; ?> :
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea rows="10" cols="43" name="content" placeholder="Write your comment here !"></textarea>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>
                        <input type="submit" class="btn_form" value="Post my comment">

                    </td>
                </tr>
                </tbody>
            </table>

        </form>
    </div>

<?php } ?>
<a href="?page=comment&action=show&id=<?= $article['id']; ?>"><button class="btn_item"><span>See comments </span></button> </a>
<br>
</body>