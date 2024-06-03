

<?php require_once './header.php'; ?>

<?php


require_once './another/database.php';
require_once './another/User_Models.php';

$database = new Database();
$db = $database->getConnection();
$userModel = new User($db);

$user = $userModel->getUserById($id);

?>

<main>
    <h1>Your Account Information</h1>
    <section>
        <h2>Profile Details</h2>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    </section>
    <section>
        <h2>Account Settings</h2>
        <p><a href="settings.php">Edit Account Settings</a></p>
    </section>
    <section>
        <h2>Logout</h2>
        <p><a href="logout.php">Logout</a></p>
    </section>
</main>ion>
    </main>