<?php
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Database connection
$host = 'localhost';
$db = 'church_donations';
$user = 'root'; 
$pass = '';     

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle adding, editing, and deleting donors
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'add') {
        $stmt = $conn->prepare("INSERT INTO donors (donor_name, address, country, Contact_No, bricks_donated) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $_POST['donor_name'], $_POST['address'], $_POST['country'], $_POST['contact_no'], $_POST['bricks_donated']);
        $stmt->execute();
        $stmt->close();
        $_SESSION['alert'] = ['type' => 'success', 'message' => 'Donor added successfully!'];
    } elseif ($action === 'edit') {
        $stmt = $conn->prepare("UPDATE donors SET donor_name = ?, address = ?, country = ?, Contact_No = ?, bricks_donated = ? WHERE id = ?");
        $stmt->bind_param("sssiii", $_POST['donor_name'], $_POST['address'], $_POST['country'], $_POST['contact_no'], $_POST['bricks_donated'], $_POST['donor_id']);
        $stmt->execute();
        $stmt->close();
        $_SESSION['alert'] = ['type' => 'success', 'message' => 'Donor updated successfully!'];
    }
}

if (isset($_GET['delete_id'])) {
    $stmt = $conn->prepare("DELETE FROM donors WHERE id = ?");
    $stmt->bind_param("i", $_GET['delete_id']);
    $stmt->execute();
    $stmt->close();
    $_SESSION['alert'] = ['type' => 'success', 'message' => 'Donor deleted successfully!'];
}

// Fetch dashboard data
if (isset($_GET['fetch_cards'])) {
    $result = $conn->query("SELECT COUNT(*) as donor_count, SUM(bricks_donated) as total_bricks FROM donors");
    $data = $result->fetch_assoc();
    $data['total_amount'] = $data['total_bricks'] * 1000;
    $data['remaining_bricks'] = 100000 - $data['total_bricks'];
    echo json_encode($data);
    exit();
}

// Dashboard data for cards
$result = $conn->query("SELECT COUNT(*) as donor_count, SUM(bricks_donated) as total_bricks FROM donors");
$data = $result->fetch_assoc();
$donor_count = $data['donor_count'] ?? 0;
$total_bricks = $data['total_bricks'] ?? 0;
$total_amount = $total_bricks * 1000;
$remaining_bricks = 100000 - $total_bricks;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - St. Anthony's Church</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        #addDonorBtn {
            background-color: orange; /* Orange color */
            color: white; /* White text color */
            padding: 10px 20px; /* Add some padding */
            border: none; /* Remove default border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Change cursor to pointer */
            font-size: 16px; /* Adjust font size */
            transition: background-color 0.3s; /* Smooth transition */
        }

        #addDonorBtn:hover {
            background-color: darkorange; /* Darker orange on hover */
        }

        .table-wrapper {
            margin-top: 20px;
        }

        .donors-table th, .donors-table td {
            padding: 10px;
            text-align: left;
        }

        .donors-table th {
            background-color: #f2f2f2;
        }

        .donors-table .editBtn {
            background: none;
            border: none;
            color: #007BFF;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
        }

        .donors-table .editBtn:hover {
            text-decoration: underline;
        }

        .donors-table a {
            text-decoration: none;
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1>Dashboard</h1>
        <div class="cards">
        <div class="card">Donors: <?php echo $donor_count; ?></div>
        <div class="card">Total Bricks: <?php echo $total_bricks; ?></div>
        <div class="card">Total Amount Raised: Rs <?php echo $total_amount; ?></div>
        <div class="card">Bricks Left: <?php echo $remaining_bricks; ?></div> <!-- New card for remaining bricks -->
    </div>
        
        <h2>Donor List</h2>
        <button id="addDonorBtn">Add Donor</button>
        <div class="table-wrapper">
            <table class="donors-table">
                <thead>
                    <tr>
                        <th>Donor Name</th>
                        <th>Address</th>
                        <th>Country</th>
                        <th>Contact No</th> <!-- Changed from Full Name to Contact No -->
                        <th>Bricks Donated</th>
                        <th>Actions</th>
                    </tr>
                </thead>
               <?php

            ?>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM donors");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['donor_name']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['country']}</td>
                        <td>{$row['Contact_No']}</td>
                        <td>{$row['bricks_donated']}</td>
                        <td>
                            <button class='editBtn' data-id='{$row['id']}' data-name='{$row['donor_name']}' data-address='{$row['address']}' data-country='{$row['country']}' data-contactno='{$row['Contact_No']}' data-bricks='{$row['bricks_donated']}'>
                                <i class='fas fa-edit'></i> Edit
                            </button>
                            <a href='?delete_id={$row['id']}' onclick='return confirm(\"Are you sure you want to delete this donor?\");' style='color: red;'>
                                <i class='fas fa-trash-alt'></i> Delete
                            </a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
           
            </table>
        </div>
    </div>

    <!-- Add/Edit Donor Modal -->
    <div id="donorModal" style="display:none;">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 id="modalTitle">Add New Donor</h2>
            <form id="donorForm" method="POST">
                <input type="hidden" name="action" value="add">
                <input type="hidden" name="donor_id" id="donor_id" value="">
                <input type="text" name="donor_name" id="donor_name" placeholder="Donor Name" required>
                <input type="text" name="address" id="address" placeholder="Address" required>
                <input type="text" name="country" id="country" placeholder="Country" required>
                <input type="text" name="contact_no" id="contact_no" placeholder="Contact No" required> <!-- Changed from full_name to contact_no -->
                <input type="number" name="bricks_donated" id="bricks_donated" placeholder="Number of Bricks" required>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            // Open modal for adding or editing donor
            $('#addDonorBtn').click(function() {
                $('#donorModal').show();
                $('#donorForm')[0].reset();
                $('#modalTitle').text('Add New Donor');
                $('input[name="action"]').val('add');
            });

            $('.editBtn').click(function() {
                $('#donorModal').show();
                $('#modalTitle').text('Edit Donor');
                $('input[name="action"]').val('edit');

                const donorId = $(this).data('id');
                $('#donor_id').val(donorId);
                $('#donor_name').val($(this).data('name'));
                $('#address').val($(this).data('address'));
                $('#country').val($(this).data('country'));
                $('#contact_no').val($(this).data('contactno')); // Change from full_name to contact_no
                $('#bricks_donated').val($(this).data('bricks'));
            });

            $('.close').click(function() {
                $('#donorModal').hide();
            });

            $(window).click(function(event) {
                if ($(event.target).is('#donorModal')) {
                    $('#donorModal').hide();
                }
            });
        });
    </script>

<script>
    // Script for clearing alerts and updating dashboard dynamically
    if (performance.navigation.type === 1) {
        <?php if (isset($_SESSION['alert_message'])) { ?>
            <?php unset($_SESSION['alert_message']); ?>
        <?php } ?>
    }

    function updateDashboard() {
        $.ajax({
            url: 'fetch_dashboard_data.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('.card:nth-child(1)').text('Donors: ' + data.donor_count);
                $('.card:nth-child(2)').text('Total Bricks: ' + data.total_bricks);
                $('.card:nth-child(3)').text('Total Amount Raised: Rs ' + data.total_amount);
                $('.card:nth-child(4)').text('Bricks Left: ' + data.remaining_bricks);
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch dashboard data:', error);
            }
        });
    }

    setInterval(updateDashboard, 30000);
    $(document).ready(function() {
        updateDashboard();
    });
</script>
</body>
</html>

<?php $conn->close(); ?>
