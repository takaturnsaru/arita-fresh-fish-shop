<?php 
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );

/**
 * アイキャッチを使用可能にする
 */
add_theme_support( "post-thumbnails" );

function change_excerpt_length( $length ) {
  return 50; 
}
add_filter( 'excerpt_length', 'change_excerpt_length', 999 );

/**
 * カスタムメニュー機能を使用可能にする。
 */
add_theme_support("menus");