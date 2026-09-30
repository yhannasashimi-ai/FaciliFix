<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FaciliFix - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">FaciliFix Admin</a>
        <div class="ms-auto">
            <span class="text-white me-3">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="mb-4">Admin Dashboard</h2>
        
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow p-3">
                    <h4>Manage Rooms</h4>
                    <p class="text-muted">Add or view campus rooms and buildings.</p>
                    <a href="manage_rooms.php" class="btn btn-primary">Go to Rooms</a>
                </div>
            </div>
            
            <div class="col-md-4 mb-3">
                <div class="card shadow p-3">
                    <h4>Manage Equipment</h4>
                    <p class="text-muted">Add equipment and assign them to specific rooms.</p>
                    <a href="manage_equipment.php" class="btn btn-success">Go to Equipment</a>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow p-3">
                    <h4>View Reports</h4>
                    <p class="text-muted">Check maintenance issues reported by staff.</p>
                    <a href="admin_reports.php" class="btn btn-warning text-white">View Reports</a>
                </div>
            </div>

            
            <a href="manage_staff.php" class="btn btn-primary">Manage Staff Accounts</a>
        </div>
    </div>

</body>
</html>