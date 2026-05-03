=== Moover – Order Tracking & Delivery Manager ===
Contributors: faav11
Tags: woocommerce, tracking, delivery, orders, logistics, shipment
Requires at least: 5.8
Tested up to: 6.9
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Moover is a lightweight WooCommerce extension that adds order tracking and delivery status management to your online store.

It allows customers to track their orders in real time while giving store owners a simple way to update shipment progress.

Key features:
- Order tracking page using shortcode or clean URL
- WooCommerce order status integration
- Automated email notifications for status updates
- Shipment timeline display (Placed → Delivered)
- Admin-friendly order management system

Moover helps improve customer trust by making delivery updates transparent and easy to understand.

== Features ==

- WooCommerce order tracking system
- Shortcode support: [moover_tracking]
- Clean tracking URL: /moover/track/{order_id}
- Automatic email notifications on order status change
- Shipment timeline display for customers
- Lightweight and performance optimized
- No external API dependency

== Installation ==

1. Upload the plugin folder to /wp-content/plugins/
2. Activate the plugin from WordPress admin
3. Ensure WooCommerce is installed and active
4. Use shortcode [moover_tracking] on any page
5. Or use tracking URL: /moover/track/{order_id}

== Frequently Asked Questions ==

= Does Moover require WooCommerce? =
Yes, Moover works only with WooCommerce orders.

= Does it support real-time tracking APIs? =
No. Moover uses WooCommerce order statuses as tracking stages.

= Can I customize the tracking page? =
Yes, you can override the template file in your theme.

== Changelog ==

= 1.0.0 =
- Initial release
- Added tracking page shortcode
- Added clean URL support
- Added email notification system
- Added shipment timeline display

== Upgrade Notice ==

= 1.0.0 =
Initial stable release of Moover order tracking system.
