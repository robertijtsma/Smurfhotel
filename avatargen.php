<?php

    // Copyright Clawed.
    // Got bored to be honest.
    
    function filter( $string ) {
        return mysql_real_escape_string( $string );
    }
    
    define( "HOSTNAME", "localhost" );
    define( "USERNAME", "root" );
    define( "PASSWORD", 'GDTGYR455t4tg54%^$^$frt' );
    define( "DATABASE", "poppy123" );
    
    if( !mysql_connect( HOSTNAME, USERNAME, PASSWORD ) ) die( mysql_error() );
    if( !mysql_select_db( DATABASE ) ) die( mysql_error() );
    
    $url = "https://smurfhotel.nl/";
    
    if( !filter( $_GET['username'] ) ) {
        die( "<h1>Error</h1><hr>Username required.<hr>" );
    }
    
    $query = mysql_query( "SELECT * FROM users WHERE username = '" . filter( $_GET['username'] ) . "'" ) or die( mysql_error() );
    if( mysql_num_rows( $query ) < 1 ) { die( "Username does not exists." ); }
    $array = mysql_fetch_assoc( $query );
    $url = $url . "smurf-imaging/avatarimage.php?figure=" . $array['look'];
    
    if( filter( $_GET['direction'] ) ) {
        $url = $url . "&direction=" . filter( $_GET['direction'] );
    }
    
    if( filter( $_GET['gesture'] ) ) {
        $url = $url . "&gesture=" . filter( $_GET['gesture'] );
    }
    
    if( filter( $_GET['size'] ) ) {
        $url = $url . "&size=" . filter( $_GET['size'] );
    }
    
    if( filter( $_GET['img_format'] ) ) {
        $url = $url . "&img_format=" . filter( $_GET['img_format'] );
    }
    
    if( filter( $_GET['action'] ) ) {
        $url = $url . "&action=" . filter( $_GET['action'] );
    }
    
    $dir = "avatars/";
    $open = fopen( $url, "r" );
    $hash = filter( $array['username'] ) . "-" . md5( $array['look'] );
    $path = $dir . $hash . ".png";
    
    if( !file_exists( $path ) ) {
        if( $open ) {
            file_put_contents( $path, $open );
            $image = file_get_contents( $path );
            fclose( $open );
        }
    }else{
        $image = file_get_contents( $path );
    }
    
    header( "Content-Type: image/png" );
    exit( $image );

?>