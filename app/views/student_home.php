<!DOCTYPE html>
<html>
<head><title><?= $title ?></title></head>
<body>
    <h1>Student Information</h1>
    <p>Welcome to my Student Info page.</p>

    <nav>
        <a href="<?= site_url('student') ?>">Home</a> |
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </nav>
</body>
</html>