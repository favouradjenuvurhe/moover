<div class="moover-tracking">
    <h2>Order Tracking</h2>

    <p>Order ID: <?php echo esc_html($order_id); ?></p>

    <div class="status-box">
        <strong>Status:</strong> <?php echo esc_html($status); ?>
    </div>

    <ul>
        <li>✔ Order Placed</li>
        <li>✔ Processing</li>
        <li>✔ Dispatched</li>
        <li>✔ In Transit</li>
        <li>✔ Delivered</li>
    </ul>
</div>
