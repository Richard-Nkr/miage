<?php

use App\repository\CommentRepository;

$title = 'SneakerShop - Comments'; ?>

<?php ob_start(); ?>

<body>
    <div class="table_container">
        <table class="table_old_comments">
            <?php
            foreach ($comments as $comment) {
                $commentRepo = new CommentRepository;
                $clientInfo = $commentRepo->getClientById($comment['id_client']);
            ?>
                <tr>
						<td>


							<h5><?= "Le"." ".'<i>'.$comment['date_add'].'-'.'&emsp;'.$clientInfo[0]['nickname']." ".":"; ?></h5>
						</td>
						<td></td>
						<td>
							<?= $comment['content']; ?> <br> <br>

						</td>
					
					</tr>
					<tr></tr>
            <?php } ?>
        </table>
    </div>

</body>
<?php
$body = ob_get_clean();
require('template.php');
?>