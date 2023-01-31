<?php
/**
 * Plugin Name: DevTools
 * Plugin URI: https://github.com/steveorevo/hestiacp-devtools
 * Description: Automatically furnishes composer, wp-cli, etc. for each user account that is created.
 */

 global $hcpp;

 // Execute the devtools.sh script asychronously when a new user is created.
 $hcpp->add_action( 'priv_add_user', function( $args) {
    $user = $args[0];
    $cmd = "nohup " . __DIR__ . "/devtools.sh ";
    $cmd .= escapeshellarg( $user ) . ' > /dev/null 2>&1 &';
    shell_exec( $cmd );
 });
