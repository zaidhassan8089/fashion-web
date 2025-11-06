<header>
    <div class="logo">
        <img src="../image/logo (1).png" width="100">
    </div>
    <div class="right">
        <div class="bx bxs-user" id="user-btn"></div>
        <div class="toggle-btn"><i class="bx bx-menu"></i></div>
    </div>
    <?php
$select_profile = $conn->prepare("SELECT * FROM sellers WHERE id = ?");
$select_profile->execute([$seller_id]);

// Check if a user profile exists
if ($select_profile->rowCount() > 0) {
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);


    ?>
    <img src="../uploaded_files/<?= htmlspecialchars($fetch_profile['image']); ?>" alt="Profile Image">
    <h3 style="margin-bottom: 1rem;"><?= htmlspecialchars($fetch_profile['name']); ?></h3>
    <div class="flex-btn">
        <a href="profile.php" class="btn">view profile</a>
        <a href="components/user_logout.php" onclick="return confirm('logout from this website');" class="btn">logout</a>
    </div>
    <?php
} else {
    ?>
    <img src="image/man.png" alt="Default Profile">
    <h3 style="margin-bottom: 1rem;">please login or register</h3>
    <div class="flex-btn">
        <a href="login.php" class="btn">login</a>
        <a href="register.php" class="btn">register</a>
    </div>
    <?php
}
?>
</header>