<!DOCTYPE html>
<html>
<head><title><?= $title ?></title></head>
<body>
    <h1>Student Information</h1>
    <p>Student ID: <?= $student['student_id'] ?></p>
    <p>Name: <?= $student['name'] ?></p>
    <p>Course: <?= $student['course'] ?></p>
    <p>Year Level: <?= $student['year'] ?></p>
    <p>Section: <?= $student['section'] ?></p>
    <p>Email: <?= $student['email'] ?></p>

    <nav>
        <a href="<?= site_url('student') ?>">Home</a> |
        <a href="<?= site_url('student/profile') ?>">Student Profile</a>
    </nav>
</body>
</html>