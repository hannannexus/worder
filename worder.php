<?php

/**
 * Plugin Name: Worder
 * Plugin URI: #
 * Description: Display woocommerce order details
 * Author: Hannan
 * Author URI: #
 * Version: 1.0
 * 
 */
 
 



    global $woocommerce, $post;

    $order = new WC_Order($post->ID);
    $order_mail = $order->get_billing_email();




   
