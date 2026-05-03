<?php
$order_id = get_query_var('moover_order_id');
$order_id = $order_id ? intval($order_id) : (isset($_GET['order_id']) ? intval($_GET['order_id']) : 0);

$order = wc_get_order($order_id);

if (!$order) {
    echo "<h3>Invalid tracking number</h3>";
    return;
}

$status = $order->get_status();
$items = $order->get_items();
?>

<div class="moover-container">
    <h2>🚚 Order Tracking</h2>

    <p><strong>Order ID:</strong> #<?php echo esc_html($order_id); ?></p>

    <p><strong>Status:</strong> <?php echo esc_html($status); ?></p>

    <h3>📦 Items</h3>
    <ul>
        <?php foreach ($items as $item): ?>
            <li>
                <?php echo esc_html($item->get_name()); ?>
                (Qty: <?php echo esc_html($item->get_quantity()); ?>)
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>🚚 Timeline</h3>
    <ul>
        <li>✔ Order Placed</li>
        <li>✔ Processing</li>
        <li>✔ Packed</li>
        <li>✔ Dispatched</li>
        <li>✔ In Transit</li>
        <li>✔ Delivered</li>
    </ul>
</div>
