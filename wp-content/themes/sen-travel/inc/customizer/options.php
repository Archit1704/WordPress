<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function sen_travel_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'sen-travel' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'sen_travel_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function sen_travel_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'sen-travel' ),
            'off'       => esc_html__( 'Disable', 'sen-travel' )
        );
        return apply_filters( 'sen_travel_switch_options', $arr );
    }
endif;

/**
 * List of category for category choices.
 * @return Array Array of post ids and name.
 */
function sen_travel_category_choices() {
    $tax_args = array(
        'hierarchical' => 0,
        'taxonomy'     => 'category',
    );
    $taxonomies = get_categories( $tax_args );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'sen-travel' );
    foreach ( $taxonomies as $tax ) {
        $choices[ $tax->term_id ] = $tax->name;
    }
    return  $choices;
}
if ( ! function_exists( 'sen_travel_get_woo_product' ) ) {
    /**
     * Get product.
     */
    function sen_travel_get_woo_product() {
        $args = array(
            'posts_per_page' => -1,
        );
         
        $choices = array( '' => esc_html__( '--Select--', 'sen-travel' ) );
        $products = wc_get_products( $args );
        foreach ( $products as $product ) {
            $id = $product->get_id();
            $title = $product->get_name();
            $choices[ $id ] = $title;
        }
        return $choices;
    }
}




 /**
 * Get an array of google fonts.
 * 
 */
function sen_travel_font_choices() {
    $font_family_arr = array();
    $font_family_arr[''] = esc_html__( '--Default--', 'sen-travel' );

    // Make the request
    $request = wp_remote_get( get_theme_file_uri( 'assets/fonts/webfonts.json' ) );

    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    // Retrieve the data
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if ( ! empty( $data ) ) {
        foreach ( $data->items as $items => $fonts ) {
            $family_str_arr = explode( ' ', $fonts->family );
            $family_value = implode( '-', array_map( 'strtolower', $family_str_arr ) );
            $font_family_arr[ $family_value ] = $fonts->family;
        }
    }

    return apply_filters( 'sen_travel_font_choices', $font_family_arr );
}

if ( ! function_exists( 'sen_travel_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'header-font-1'   => esc_html__( 'Raleway', 'sen-travel' ),
            'header-font-2'   => esc_html__( 'Poppins', 'sen-travel' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'sen-travel' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'sen-travel' ),
            'header-font-5'   => esc_html__( 'Lato', 'sen-travel' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'header-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'header-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'header-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'sen-travel' ),
            'header-font-18'   => esc_html__( 'Orbitron' , 'sen-travel' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'sen-travel' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'sen-travel' ),
            'header-font-21'   => esc_html__( 'Courgette', 'sen-travel' ),
            'header-font-22'   => esc_html__( 'Rajdhani', 'sen-travel' ),
            'header-font-23'   => esc_html__( 'Bad Script', 'sen-travel' ),
            'header-font-24'   => esc_html__( 'Righteous', 'sen-travel' ),
            'header-font-25'   => esc_html__( 'Dosis', 'sen-travel' ),
            'header-font-26'   => esc_html__( 'Cinzel Decorative', 'sen-travel' ),
            'header-font-27'   => esc_html__( 'Faster one', 'sen-travel' ),
            'header-font-28'   => esc_html__( 'Tangerine', 'sen-travel' ),
            'header-font-29'   => esc_html__( 'Fredericka the Great', 'sen-travel' ),
            'header-font-30'   => esc_html__( 'Shadows Into Light', 'sen-travel' ),
            'header-font-31'   => esc_html__( 'Gloria Hallelujah', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'sen_travel_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'body-font-1'     => esc_html__( 'Raleway', 'sen-travel' ),
            'body-font-2'     => esc_html__( 'Poppins', 'sen-travel' ),
            'body-font-3'     => esc_html__( 'Roboto', 'sen-travel' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'sen-travel' ),
            'body-font-5'     => esc_html__( 'Lato', 'sen-travel' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'body-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'body-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'body-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'body-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'body-font-17'   => esc_html__( 'Dancing Script ', 'sen-travel' ),
            'body-font-18'   => esc_html__( 'Rajdhani', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'sen_travel_archive_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_archive_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'header-font-1'   => esc_html__( 'Raleway', 'sen-travel' ),
            'header-font-2'   => esc_html__( 'Poppins', 'sen-travel' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'sen-travel' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'sen-travel' ),
            'header-font-5'   => esc_html__( 'Lato', 'sen-travel' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'header-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'header-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'header-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'sen-travel' ),
            'header-font-18'   => esc_html__( 'Orbitron' , 'sen-travel' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'sen-travel' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'sen-travel' ),
            'header-font-21'   => esc_html__( 'Courgette', 'sen-travel' ),
            'header-font-22'   => esc_html__( 'Rajdhani', 'sen-travel' ),
            'header-font-23'   => esc_html__( 'Bad Script', 'sen-travel' ),
            'header-font-24'   => esc_html__( 'Righteous', 'sen-travel' ),
            'header-font-25'   => esc_html__( 'Dosis', 'sen-travel' ),
            'header-font-26'   => esc_html__( 'Cinzel Decorative', 'sen-travel' ),
            'header-font-27'   => esc_html__( 'Faster one', 'sen-travel' ),
            'header-font-28'   => esc_html__( 'Tangerine', 'sen-travel' ),
            'header-font-29'   => esc_html__( 'Fredericka the Great', 'sen-travel' ),
            'header-font-30'   => esc_html__( 'Shadows Into Light', 'sen-travel' ),
            'header-font-31'   => esc_html__( 'Gloria Hallelujah', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_archive_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'sen_travel_archive_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_archive_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'body-font-1'     => esc_html__( 'Raleway', 'sen-travel' ),
            'body-font-2'     => esc_html__( 'Poppins', 'sen-travel' ),
            'body-font-3'     => esc_html__( 'Roboto', 'sen-travel' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'sen-travel' ),
            'body-font-5'     => esc_html__( 'Lato', 'sen-travel' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'body-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'body-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'body-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'body-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'body-font-17'   => esc_html__( 'Dancing Script ', 'sen-travel' ),
            'body-font-18'   => esc_html__( 'Rajdhani', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_archive_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'sen_travel_page_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_page_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'header-font-1'   => esc_html__( 'Raleway', 'sen-travel' ),
            'header-font-2'   => esc_html__( 'Poppins', 'sen-travel' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'sen-travel' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'sen-travel' ),
            'header-font-5'   => esc_html__( 'Lato', 'sen-travel' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'header-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'header-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'header-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'sen-travel' ),
            'header-font-18'   => esc_html__( 'Orbitron' , 'sen-travel' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'sen-travel' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'sen-travel' ),
            'header-font-21'   => esc_html__( 'Courgette', 'sen-travel' ),
            'header-font-22'   => esc_html__( 'Rajdhani', 'sen-travel' ),
            'header-font-23'   => esc_html__( 'Bad Script', 'sen-travel' ),
            'header-font-24'   => esc_html__( 'Righteous', 'sen-travel' ),
            'header-font-25'   => esc_html__( 'Dosis', 'sen-travel' ),
            'header-font-26'   => esc_html__( 'Cinzel Decorative', 'sen-travel' ),
            'header-font-27'   => esc_html__( 'Faster one', 'sen-travel' ),
            'header-font-28'   => esc_html__( 'Tangerine', 'sen-travel' ),
            'header-font-29'   => esc_html__( 'Fredericka the Great', 'sen-travel' ),
            'header-font-30'   => esc_html__( 'Shadows Into Light', 'sen-travel' ),
            'header-font-31'   => esc_html__( 'Gloria Hallelujah', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_page_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'sen_travel_page_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_page_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'body-font-1'     => esc_html__( 'Raleway', 'sen-travel' ),
            'body-font-2'     => esc_html__( 'Poppins', 'sen-travel' ),
            'body-font-3'     => esc_html__( 'Roboto', 'sen-travel' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'sen-travel' ),
            'body-font-5'     => esc_html__( 'Lato', 'sen-travel' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'body-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'body-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'body-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'body-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'body-font-17'   => esc_html__( 'Dancing Script ', 'sen-travel' ),
            'body-font-18'   => esc_html__( 'Rajdhani', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_page_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'sen_travel_post_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_post_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'header-font-1'   => esc_html__( 'Raleway', 'sen-travel' ),
            'header-font-2'   => esc_html__( 'Poppins', 'sen-travel' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'sen-travel' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'sen-travel' ),
            'header-font-5'   => esc_html__( 'Lato', 'sen-travel' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'header-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'header-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'header-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'sen-travel' ),
            'header-font-18'   => esc_html__( 'Orbitron' , 'sen-travel' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'sen-travel' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'sen-travel' ),
            'header-font-21'   => esc_html__( 'Courgette', 'sen-travel' ),
            'header-font-22'   => esc_html__( 'Rajdhani', 'sen-travel' ),
            'header-font-23'   => esc_html__( 'Bad Script', 'sen-travel' ),
            'header-font-24'   => esc_html__( 'Righteous', 'sen-travel' ),
            'header-font-25'   => esc_html__( 'Dosis', 'sen-travel' ),
            'header-font-26'   => esc_html__( 'Cinzel Decorative', 'sen-travel' ),
            'header-font-27'   => esc_html__( 'Faster one', 'sen-travel' ),
            'header-font-28'   => esc_html__( 'Tangerine', 'sen-travel' ),
            'header-font-29'   => esc_html__( 'Fredericka the Great', 'sen-travel' ),
            'header-font-30'   => esc_html__( 'Shadows Into Light', 'sen-travel' ),
            'header-font-31'   => esc_html__( 'Gloria Hallelujah', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_post_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'sen_travel_post_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_post_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'body-font-1'     => esc_html__( 'Raleway', 'sen-travel' ),
            'body-font-2'     => esc_html__( 'Poppins', 'sen-travel' ),
            'body-font-3'     => esc_html__( 'Roboto', 'sen-travel' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'sen-travel' ),
            'body-font-5'     => esc_html__( 'Lato', 'sen-travel' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'body-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'body-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'body-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'body-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'body-font-17'   => esc_html__( 'Dancing Script ', 'sen-travel' ),
            'body-font-18'   => esc_html__( 'Rajdhani', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_post_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'sen_travel_site_title_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_site_title_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'site-font-1'   => esc_html__( 'Raleway', 'sen-travel' ),
            'site-font-2'   => esc_html__( 'Poppins', 'sen-travel' ),
            'site-font-3'   => esc_html__( 'Montserrat', 'sen-travel' ),
            'site-font-4'   => esc_html__( 'Open Sans', 'sen-travel' ),
            'site-font-5'   => esc_html__( 'Lato', 'sen-travel' ),
            'site-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'site-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'site-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'site-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'site-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'site-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'site-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'site-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'site-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'site-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'site-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'site-font-17'   => esc_html__( 'Henny Penny', 'sen-travel' ),
            'site-font-18'   => esc_html__( 'Orbitron' , 'sen-travel' ),
            'site-font-19'   => esc_html__( 'Marck Script', 'sen-travel' ),
            'site-font-20'   => esc_html__( 'Kaushan Script', 'sen-travel' ),
            'site-font-21'   => esc_html__( 'Courgette', 'sen-travel' ),
            'site-font-22'   => esc_html__( 'Rajdhani', 'sen-travel' ),
            'site-font-23'   => esc_html__( 'Bad Script', 'sen-travel' ),
            'site-font-24'   => esc_html__( 'Righteous', 'sen-travel' ),
            'site-font-25'   => esc_html__( 'Dosis', 'sen-travel' ),
            'site-font-26'   => esc_html__( 'Cinzel Decorative', 'sen-travel' ),
            'site-font-27'   => esc_html__( 'Faster one', 'sen-travel' ),
            'site-font-28'   => esc_html__( 'Tangerine', 'sen-travel' ),
            'site-font-29'   => esc_html__( 'Fredericka the Great', 'sen-travel' ),
            'site-font-30'   => esc_html__( 'Shadows Into Light', 'sen-travel' ),
            'site-font-31'   => esc_html__( 'Gloria Hallelujah', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_site_title_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

if ( ! function_exists( 'sen_travel_site_tagline_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function sen_travel_site_tagline_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'sen-travel' ),
            'tagline-font-1'     => esc_html__( 'Raleway', 'sen-travel' ),
            'tagline-font-2'     => esc_html__( 'Poppins', 'sen-travel' ),
            'tagline-font-3'     => esc_html__( 'Roboto', 'sen-travel' ),
            'tagline-font-4'     => esc_html__( 'Open Sans', 'sen-travel' ),
            'tagline-font-5'     => esc_html__( 'Lato', 'sen-travel' ),
            'tagline-font-6'   => esc_html__( 'Ubuntu', 'sen-travel' ),
            'tagline-font-7'   => esc_html__( 'Playfair Display', 'sen-travel' ),
            'tagline-font-8'   => esc_html__( 'Lora', 'sen-travel' ),
            'tagline-font-9'   => esc_html__( 'Titillium Web', 'sen-travel' ),
            'tagline-font-10'   => esc_html__( 'Muli', 'sen-travel' ),
            'tagline-font-11'   => esc_html__( 'Oxygen', 'sen-travel' ),
            'tagline-font-12'   => esc_html__( 'Nunito Sans', 'sen-travel' ),
            'tagline-font-13'   => esc_html__( 'Maven Pro', 'sen-travel' ),
            'tagline-font-14'   => esc_html__( 'Cairo', 'sen-travel' ),
            'tagline-font-15'   => esc_html__( 'Philosopher', 'sen-travel' ),
            'tagline-font-16'   => esc_html__( 'Quicksand', 'sen-travel' ),
            'tagline-font-17'   => esc_html__( 'Dancing Script ', 'sen-travel' ),
            'tagline-font-18'   => esc_html__( 'Rajdhani', 'sen-travel' ),
        );

        $output = apply_filters( 'sen_travel_site_tagline_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

 ?>