<?php
$query_result = $ob_sub_admin->select_all_order_info();

?>
<div class="row col-lg-12">
    <div class="span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>All Ordered Products Info</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h2>
                <?php if (isset($message)) {
                    echo $message;
                } ?>
            </h2>

            <h2 style="color: green;">
                <?php if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
                ?>
            </h2>

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>

                    <tr>
                        <!-- <th>Product ID</th> -->
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Total Order</th>
                        <th>Order Status</th>
                        <th>Payment Type</th>
                        <th>Payment Status</th>
                        <!-- <th>Publication Status</th> -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($order_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td class="center"><?php echo $order_info['order_id'] ?></td>
                            <td><?= $order_info['first_name'] . ' ' . $order_info['last_name'] ?></td>
                            <td class="center"><?php echo $order_info['order_total'] ?></td>
                            <td class="center"><?php echo $order_info['order_status'] ?></td>
                            <td class="center"><?php echo $order_info['payment_type'] ?></td>
                            <td class="center"><?php echo $order_info['payment_status'] ?></td>



                            <td class="center">

                                <a class="btn btn-primary" href="view_order.php?id=<?php echo $order_info['order_id'] ?>" title="View Order">
                                    <i class="halflings-icon white zoom-in"></i>
                                </a>

                                <a class="btn btn-warning" href="view_invoice.php?id=<?php echo $order_info['order_id'] ?>" title="View Invoice">
                                    <i class="halflings-icon white file-invoice"></i>
                                </a>

                                <a class="btn btn-success" href="?status==download&&id=<?php echo $order_info['order_id'] ?>" title="Download Invoice">
                                    <i class="halflings-icon white download"></i>
                                </a>
                                <a class="btn btn-info" href="edit_order.php?id=<?php echo $order_info['order_id'] ?>" title="Edit Order">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="?status==download&&id=<?php echo $order_info['order_id'] ?>" title="Delete Order">
                                    <i class="halflings-icon white trash"></i>
                                </a>


                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- box content end -->
        </div>
        <!--/span-->

    </div>
    <!--/row-->