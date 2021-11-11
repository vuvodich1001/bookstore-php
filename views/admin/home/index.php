<?php $this->view('partitions.admin.header') ?>

<div class="cardBox">
    <a class="card">
        <div>
            <div class="numbers">9,082</div>
            <div class="cardName">User</div>
        </div>
        <div class="iconBox">
            <i class="fa fa-user"></i>
        </div>
    </a>
    <a class="card">
        <div>
            <div class="numbers">302</div>
            <div class="cardName">Sales</div>
        </div>
        <div class="iconBox">
            <i class="fa fa-shopping-cart"></i>
        </div>
    </a>
    <a class="card">
        <div>
            <div class="numbers">400</div>
            <div class="cardName">Comments</div>
        </div>
        <div class="iconBox">
            <i class="fa fa-comments"></i>
        </div>
    </a>
    <a class="card">
        <div>
            <div class="numbers">$202039</div>
            <div class="cardName">Earning</div>
        </div>
        <div class="iconBox">
            <i class="fa fa-usd"></i>
        </div>
    </a>    
</div>

<div class="content">
    <div class="table-control">
        <div class="action">
            <h2>Recent Orders</h2>
            <a href="" class="btn">View All</a>
        </div>
    <div class="content">
    <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Payment method</th>
            <th>Total</th>
            <th>Status</th>
            <th>Order date</th>
            <th>Action</th>
        </thead>
        <tbody class="content-body">
            <?php
            foreach ($orders as $order) {
            ?>
                <tr>
                    <td><?php echo $order['order_id'] ?></td>
                    <td><?php echo $order['first_name'] . ' ' . $order['last_name'] ?></td>
                    <td><?php echo $order['line1'] . ', ' . $order['line2'] . ', ' . $order['city'] ?></td>
                    <td><?php echo $order['phone'] ?></td>
                    <td><?php echo $order['payment_method'] ?></td>
                    <td><?php echo number_format($order['total'], 0, '.', '.') ?>đ</td>
                    <td><?php echo $order['status'] ?></td>
                    <td><?php echo date('d/m/Y', strtotime($order['order_date'])); ?></td>
                    <td>
                        <a href="" class="btn-delete-order" order-id="<?php echo $order['order_id'] ?>"><i class="fas fa-trash-alt"></i></a>
                        <a href="" class="btn-update-order" order-id="<?php echo $order['order_id'] ?>"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn-change-status" order-id="<?php echo $order['order_id'] ?>"><i class="far fa-check-circle"></i></a>
                        <a href="" class="btn-change-status" order-id="<?php echo $order['order_id'] ?>"><i class="fas fa-shipping-fast"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
    </div>
    <div class="table-control">
        <div class="action">
            <h2>Recent Review</h2>
            <a href="" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Customer</td>
                    <td>Book</td>
                    <td>Headline</td>
                    <td>Rating</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody class="content-body">
            <?php
            foreach ($reviews as $review) {
            ?>
                <tr>
                    <td><?php echo $review['customer_id'] ?></td>
                    <td><?php echo $review['book_id'] ?></td>
                    <td><?php echo $review['headline']?></td>
                    <td><?php echo $review['rating'] ?></td>
                    <td>
                        <a href="" class="btn-delete-review" review-id="<?php echo $review['review_id'] ?>"><i class="fas fa-trash-alt"></i></a>
                        <a href="" class="btn-update-review" review-id="<?php echo $review['review_id'] ?>"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn-change-status" review-id="<?php echo $review['review_id'] ?>"><i class="far fa-check-circle"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>
            


<?php $this->view('partitions.admin.footer') ?>