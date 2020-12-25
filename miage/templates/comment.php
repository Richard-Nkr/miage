<div class="table_container">
    <table class="table_old_comments">
        <tr>
            <td valign="top">
                <h5><?= "Le" . " " . '<b>' . $date . '</b>' . " " . 'à' . " " . '<i>' . $time . '</i>' . "&emsp;" . '-' . '&emsp;' . $clientInfo[0]['nickname'] . " " . ":"; ?></h5>
            </td>
            <td valign="top">
               <?= $comment['content']; ?>
            </td>

        </tr>
        <tr></tr>
    </table>
</div>

<br>
</body>