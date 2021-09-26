<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "ddc371d891c33946eb017dc032cea5d3";
$scopes = "read_orders,write_products";
$redirect_uri = "https://github.com/latenightcoderr/shopifyapp.github.io/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
