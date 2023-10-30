<?php
/*
 * @wordpress-plugin
 * Plugin Name:       IWS Custome Code
 * Description:       Using For Custom Code 
 * Author:            SK
 * Version:           0.8.1
 * Requires at least: 5.2
 * Requires PHP:      5.6
 */

 remove_filter('the_excerpt','wpautop');
 remove_filter('the_content','wpautop');