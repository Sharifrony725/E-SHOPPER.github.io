<?php
$order_id = $_GET['id'];
$customer_query_result  = $ob_sub_admin->select_customer_info_by_order_id($order_id);
$customer_info = mysqli_fetch_assoc($customer_query_result);

$shipping_query_result  = $ob_sub_admin->select_shipping_info_by_order_id($order_id);
$shipping_info = mysqli_fetch_assoc($shipping_query_result);

$payment_query_result  = $ob_sub_admin->select_payment_info_by_order_id($order_id);
$payment_info = mysqli_fetch_assoc($payment_query_result);
?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>View Ordered Product Details </h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <!-- <div class="box-content"> -->


            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <h2>Customer Info</h2>
                <tbody>
                    <tr>
                        <td>Customer Name</td>
                        <td><?= $customer_info['first_name'] . ' ' . $customer_info['last_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email Addree</td>
                        <td><?= $customer_info['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?= $customer_info['phone_number'] ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?= $customer_info['address'] ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><?= $customer_info['city'] ?></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td><?= $customer_info['district'] ?></td>
                    </tr>

                </tbody>
                </thead>
            </table>

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <h2>Shipping Info</h2>
                <tbody>
                    <tr>
                        <td>Full Name</td>
                        <td><?= $shipping_info['full_name'] ?></td>
                    </tr>
                    <tr>
                        <td>Email Addree</td>
                        <td><?= $shipping_info['email'] ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?= $shipping_info['phone_number'] ?></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><?= $shipping_info['address'] ?></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><?= $shipping_info['city'] ?></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td><?= $shipping_info['district'] ?></td>
                    </tr>

                </tbody>
                </thead>
            </table>

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <h2>Payment Info</h2>
                <tbody>
                    <tr>
                        <td>Payment Type</td>
                        <td><?= $payment_info['payment_type'] ?></td>
                    </tr>
                    <tr>
                        <td>Payment Status</td>
                        <td><?= $payment_info['payment_status'] ?></td>
                    </tr>

                </tbody>
                </thead>
            </table>

            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <h2>Product Info</h2>
                <tbody>
                    <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                    </tr>
                    <tr>
                        <td><?= $product_info[''] ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
                </thead>
            </table>
            <!-- box content end -->
        </div>
        <!--/span-->

    </div>
    <!--/row-->
</div>