<?php
require_once './another/database.php';
require_once './another/News_Models.php';

$database = new Database();
$db = $database->getConnection();
$news = new News($db);

$newss = $news->getAllNews();
?>

<?php require_once './header.php'; ?>

    <h1 class="h1">Tin Tức</h1>
    <table class="table1">
        <tbody class="tbody1">
            <?php foreach ($newss as $new) : ?>
                <tr class="tr1">
                    <td class="td1"><img src="./assets/img/<?php echo $new['type']; ?>/<?php echo $new['img']; ?>" alt="" style="width:160px;margin:2px;text-align: center;"></td>
                    <td class="td2"><a href="./<?php echo ($new['type']); ?>.php"><?php echo ($new['content']); ?></a></td>
                    <td class="td3"><?php echo ($new['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php require_once './footer.php'; ?>
