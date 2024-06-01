<!DOCTYPE html>
<html>
<head>
    <title>My Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .my-orders-table {
            max-width: 800px;
            margin: 5% auto;
        }
    </style>
</head>
<body>
<div class="a">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php"><img src="../Photo.jpeg" height="60px", width="80px"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
              <li class="nav-item ">
                <a class="nav-link" href="../index.php">HOME <span class="sr-only"></span></a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="../NOTIFICATION.pdf">NOTIFICATION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Grivence.html">GRIVENCE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../help.php">HELP </a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="../contact.html">contact us</a>
              </li>
              <li>
              <div>
                <a href ="consumer.php"><button type="back" class="btn btn-primary">Back</button></a>
      </div>
      </li>
            
            </ul>
          </div>
        </nav>
          
      </div>
    <div class="container">
        <div class="my-orders-table">
            <h2>My Orders</h2>
            <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th>Crop ID</th>
                        <th>Crop Name</th>
                        <th>Crop Image</th>
                        <th>Farmer Name</th>
                        <th>Total Ordered Amount</th>
                        <th>Total Price</th>
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Include the database connection file
                    require 'conection.php';
                    session_start();

                    // Get the customer ID from the session (assuming it is stored in $_SESSION['customer_id'])
                    $customerId = $_SESSION['customer_id'];

                    // Fetch the customer orders from the database
                    $sql = "SELECT * FROM customer_orders WHERE customer_id = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $customerId);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Check if there are any orders
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $cropId = $row['crop_id'];
                            $totalOrderedAmount = $row['total_order_amount'];
                            $totalPrice = $row['total_price'];
                            $orderStatus = $row['order_status'];

                            // Fetch the crop details from the crop_detail table
                            $cropSql = "SELECT * FROM crop_details WHERE crop_id = ?";
                            $cropStmt = $conn->prepare($cropSql);
                            $cropStmt->bind_param("i", $cropId);
                            $cropStmt->execute();
                            $cropResult = $cropStmt->get_result();

                            if ($cropResult->num_rows == 1) {
                                $cropRow = $cropResult->fetch_assoc();
                                $cropName = $cropRow['crop_name'];
                                $cropImage = $cropRow['crop_image'];
                                $farmerId = $cropRow['farmer_id'];

                                // Fetch the farmer name from the farmers table
                                $farmerSql = "SELECT * FROM farmers WHERE id = ?";
                                $farmerStmt = $conn->prepare($farmerSql);
                                $farmerStmt->bind_param("i", $farmerId);
                                $farmerStmt->execute();
                                $farmerResult = $farmerStmt->get_result();

                                if ($farmerResult->num_rows == 1) {
                                    $farmerRow = $farmerResult->fetch_assoc();
                                    $farmerName = $farmerRow['first_name'] . ' ' . $farmerRow['last_name'];
                                } else {
                                    $farmerName = 'N/A';
                                }
                            } else {
                                $cropName = 'N/A';
                                $cropImage = 'N/A';
                                $farmerName = 'N/A';
                            }
                            ?>
                            <tr>
                                <td><?php echo $cropId; ?></td>
                                <td><?php echo $cropName; ?></td>
                                <td><img src="../for_farmer/<?php echo $cropImage; ?>" alt="<?php echo $cropName; ?>" width="100"></td>
                                <td><?php echo $farmerName; ?></td>
                                <td><?php echo $totalOrderedAmount; ?></td>
                                <td><?php echo $totalPrice; ?></td>
                                <td><?php echo $orderStatus; ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo '<tr><td colspan="7">No orders found.</td></tr>';
                    }

                    // Close the prepared statements and database connection
                    $stmt->close();
                    $cropStmt->close();
                    $farmerStmt->close();
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <footer class="bg-light text-center py-4" style="margin-top: 2%;">
    <div class="container">
      <p class="m-0">© 2023 THE CURIOUS MINDS. All rights reserved.</p>
      <p class="m-0">Website created by <a href="#">THE CURIOUS MINDS TEAM </a></p>
    </div>
  </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
