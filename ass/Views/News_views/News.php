<?php 
use Pages\News_Controllers;
?>
<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=assiment', 'root', '');
        // Thiết lập chế độ lỗi để PDO ném ra ngoại lệ
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        // Xử lý ngoại lệ nếu kết nối không thành công
        echo "Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage();
        exit();
    }
?>
<?php require_once '../header.php'; ?>
    <!-- end header -->

    <h1 class="h1">Tin Tức</h1>
    <!-- <a href="create.php">Thêm bài viết mới</a> -->
    <table class="table1">
        <!-- <thead>
            <tr>
                <th>Tiêu Đề</th>
                <th>Tác Giả</th>
                <th>Ngày Tạo</th>
                <th>Hành Động</th>
            </tr>
        </thead> -->
        <tbody class="tbody1">
            <?php
            $i=0;
            $statement = $pdo->prepare("SELECT * FROM news");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $news): 
            $i++;
            ?>
                <tr class="tr1">
                    <td class="td1"><img src="./img/<?php echo $news['title']; ?>" alt="" style="width:160px;margin:2px;text-align: center;"></td>
                    <td class="td2"><a href="../product/<?php echo ($news['type']); ?>.php"><?php echo ($news['content']); ?></a></td>
                    <td class="td3"><?php echo ($news['created_at']); ?></td>
                    <!-- <td>
                        <a href="detail.php?id=<?php echo $news['id']; ?>">Xem</a>
                        <a href="edit.php?id=<?php echo $news['id']; ?>">Sửa</a>
                        <a href="delete.php?id=<?php echo $news['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?');">Xóa</a>
                    </td> -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php require_once '../footer.php'; ?>
