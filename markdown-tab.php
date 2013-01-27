<?php
/*
Plugin Name: Markdown Tab
Plugin URI: http://aramzs.me
Description: A plugin to allow users to seemlessly use Markdown for WordPress posts. 
Version: 0.0.01
Author: Aram Zucker-Scharff
Author URI: http://aramzs.me
License: GPL2
*/

/*
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//Set up some constants
define( 'MT_SLUG', 'markdown-tab' );
define( 'MT_TITLE', 'Markdown Tab' );
define( 'MT_MENU_SLUG', MT_SLUG . '-menu' );
define( 'MT_ROOT', dirname(__FILE__) );
define( 'MT_FILE_PATH', MT_ROOT . '/' . basename(__FILE__) );
define( 'MT_URL', plugins_url('/', __FILE__) );

class markdown_tab {

	

}

global $markdown_tab;
$markdown_tab = new markdown_tab();

?>