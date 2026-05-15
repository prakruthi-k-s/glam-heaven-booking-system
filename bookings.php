<?php
include 'config.php';
$admin = new Admin();
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Glam Heaven</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: EstateAgency - v2.2.1
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <style>
        /* Video Background */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        /* Tint Overlay */
        .video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            /* White tint with 80% opacity */
            z-index: -1;
        }

        /* Fix content hiding behind navbar */
        .about-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
            background-color: rgba(244, 244, 244, 0);
            padding: 80px 20px;
            margin-top: 80px;
            border-radius: 10px;
        }

        .about-content {
            display: flex;
            flex-wrap: wrap;
            max-width: 1100px;
            margin: auto;
            align-items: center;
        }

        .about-text {
            flex: 1;
            padding-right: 20px;
        }

        .about-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column-reverse;
                text-align: center;
            }

            .about-text {
                padding-right: 0;
            }

            .about-image {
                margin-bottom: 20px;
            }
        }
    </style>

    <!-- Header/Navbar -->
    <?php include 'header1.php'; ?>

    <!-- Background Video -->
    <video class="video-background" autoplay muted loop>
        <source src="assets/img/1.mp4" type="video/mp4">
    </video>

    <!-- White Tint Overlay -->
    <div class="video-overlay"></div>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <h4>Booking Status</h4>
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Request Date</th>
                            <th>Request Time</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $stmt = $admin->ret("select * from `booking` inner join `package` on booking.pack_id=package.pack_id inner join `category` on package.cat_id=category.cat_id where booking.u_id='$uid'");
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                            <tr>
                                <td><?php echo $row['b_id']; ?></td>
                                <td><?php echo $row['p_name']; ?></td>
                                <td><?php echo $row['cat_name']; ?></td>
                                <td><?php echo $row['p_amount']; ?></td>
                                <td> <?php echo date("d M Y", strtotime($row['b_req_date'])); ?></td>
                                <td><?php echo $row['b_req_time']; ?></td>
                                <td><?php echo $row['b_status']; ?>
                                    <?php if ($row['b_status'] == "approved") { ?>
                                        <button class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#bookingModal<?php echo $row['b_id']; ?>">Feedback</button>
                                    <?php } else if ($row['b_status'] == "reject") { ?>
                                            <textarea name="" class="form-control" readonly id=""><?php echo $row['b_reason']; ?></textarea>
                                    <?php } ?>
                                </td>



                                <div class="modal fade" id="bookingModal<?php echo $row['b_id']; ?>" tabindex="-1"
                                    aria-labelledby="bookingModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="bookingModalLabel">Feedback</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="usercontroller/feedback.php" method="POST">
                                                    <input type="hidden" name="p_id" value="<?php echo $row['pack_id']; ?>">


                                                    <div class="mb-3">
                                                        <label for="customer_name" class="form-label">Your Name</label>
                                                        <input type="text" class="form-control" readonly
                                                            value="<?php echo $_SESSION['u_name']; ?>" id="customer_name"
                                                            name="customer_name" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="customer_phone" class="form-label">Phone Number</label>
                                                        <input type="text" class="form-control" readonly
                                                            value="<?php echo $_SESSION['u_phone']; ?>" id="customer_phone"
                                                            name="customer_phone" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="appointment_date" class="form-label">Feedback</label>
                                                        <textarea class="form-control" name="message"
                                                            placeholder="Enter you Feedback Message..." id=""></textarea>
                                                    </div>

                                                    <button type="submit" name="send" class="btn btn-primary">Send</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script
                                    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>






                                <td> <?php echo date("d M Y", strtotime($row['b_date'])); ?></td>


                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <?php include "footer.php" ?>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>