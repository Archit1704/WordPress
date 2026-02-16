<?php
/**
 * Active callback functions.
 *
 * @package Sen Travel
 */

function sen_travel_header_background_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_header_background_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_ads_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_ads_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function sen_travel_adssec_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_adssec_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function sen_travel_pricing_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_pricing_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function sen_travel_about_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_about_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_about_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( sen_travel_about_active( $control ) && ( 'about_custom' == $content_type ) );
} 

function sen_travel_about_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( sen_travel_about_active( $control ) && ( 'about_page' == $content_type ) );
}

function sen_travel_about_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( sen_travel_about_active( $control ) && ( 'about_post' == $content_type ) );
}

function sen_travel_about_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( sen_travel_about_active( $control ) && ( 'about_category' == $content_type ) );
}


//========================Slider Section=====================//

function sen_travel_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( sen_travel_slider_active( $control ) && ( 'slider_page' == $content_type ) );
}

function sen_travel_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( sen_travel_slider_active( $control ) && ( 'slider_post' == $content_type ) );
}

function sen_travel_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return  sen_travel_slider_seperator( $control ) && ( in_array( $content_type, array( 'slider_page', 'slider_post', 'slider_custom' ) ) ) ;
}

function sen_travel_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( sen_travel_slider_active( $control ) && ( 'slider_custom' == $content_type ) );
}

function sen_travel_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[slider_content_type]' )->value();
    return ( sen_travel_slider_active( $control ) && ( 'slider_category' == $content_type ) );
}

//========================Slider Section=====================//

function sen_travel_featured_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured-slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_featured_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( sen_travel_featured_slider_active( $control ) && ( 'sr_page' == $content_type ) );
}

function sen_travel_featured_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( sen_travel_featured_slider_active( $control ) && ( 'sr_post' == $content_type ) );
}

function sen_travel_featured_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return  sen_travel_featured_slider_seperator( $control ) && ( in_array( $content_type, array( 'sr_page', 'sr_post', 'sr_custom' ) ) ) ;
}

function sen_travel_featured_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( sen_travel_featured_slider_active( $control ) && ( 'sr_custom' == $content_type ) );
}

function sen_travel_featured_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( sen_travel_featured_slider_active( $control ) && ( 'sr_category' == $content_type ) );
}



//========================Services Section=====================//

function sen_travel_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function sen_travel_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( sen_travel_services_active( $control ) && ( 'services_page' == $content_type ) );
}

function sen_travel_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( sen_travel_services_active( $control ) && ( 'services_post' == $content_type ) );
}

function sen_travel_services_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( sen_travel_services_active( $control ) && ( 'services_category' == $content_type ) );
}
//===================End Services Section==============//


//========================Information Section=====================//

function sen_travel_information_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_information_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_information_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( sen_travel_information_active( $control ) && ( 'information_custom' == $content_type ) );
} 

function sen_travel_information_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( sen_travel_information_active( $control ) && ( 'information_page' == $content_type ) );
}

function sen_travel_information_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( sen_travel_information_active( $control ) && ( 'information_post' == $content_type ) );
}


//========================detail Section=====================//

function sen_travel_details_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_details_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_details_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( sen_travel_details_active( $control ) && ( 'details_custom' == $content_type ) );
} 

function sen_travel_details_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( sen_travel_details_active( $control ) && ( 'details_page' == $content_type ) );
}

function sen_travel_details_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( sen_travel_details_active( $control ) && ( 'details_post' == $content_type ) );
}

//========================Trending Section=====================//
function sen_travel_trending_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_trending_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_trending_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( sen_travel_trending_active( $control ) && ( 'trending_custom' == $content_type ) );
} 

function sen_travel_trending_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( sen_travel_trending_active( $control ) && ( 'trending_page' == $content_type ) );
}

function sen_travel_trending_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( sen_travel_trending_active( $control ) && ( 'trending_post' == $content_type ) );
}

function sen_travel_trending_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( sen_travel_trending_active( $control ) && ( 'trending_category' == $content_type ) );
}
//===================End Trending Section==============//

//========================Subscription Section=====================//
function sen_travel_subscription_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_subscription_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Hero Section=====================//
function sen_travel_hero_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_hero_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_hero_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( sen_travel_hero_active( $control ) && ( 'hero_custom' == $content_type ) );
} 

function sen_travel_hero_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( sen_travel_hero_active( $control ) && ( 'hero_page' == $content_type ) );
}

function sen_travel_hero_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( sen_travel_hero_active( $control ) && ( 'hero_post' == $content_type ) );
}

function sen_travel_hero_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_content_type]' )->value();
    return ( sen_travel_hero_active( $control ) && ( 'hero_category' == $content_type ) );
} 

function sen_travel_hero_right_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_right_content_type]' )->value();
    return ( sen_travel_hero_active( $control ) && ( 'hero_right_page' == $content_type ) );
}

function sen_travel_hero_right_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_right_content_type]' )->value();
    return ( sen_travel_hero_active( $control ) && ( 'hero_right_post' == $content_type ) );
}

function sen_travel_hero_right_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[hero_right_content_type]' )->value();
    return ( sen_travel_hero_active( $control ) && ( 'hero_right_category' == $content_type ) );
}
//===================End Hero Section==============//

//========================Headlines Section=====================//
function sen_travel_headlines_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_headlines_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function sen_travel_headlines_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[headlines_content_type]' )->value();
    return ( sen_travel_headlines_active( $control ) && ( 'headlines_page' == $content_type ) );
}

function sen_travel_headlines_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[headlines_content_type]' )->value();
    return ( sen_travel_headlines_active( $control ) && ( 'headlines_post' == $content_type ) );
}

function sen_travel_headlines_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[headlines_content_type]' )->value();
    return ( sen_travel_headlines_active( $control ) && ( 'headlines_category' == $content_type ) );
}
//===================End Headlines Section==============//

//========================CategryNews Section=====================//
function sen_travel_categorynews_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_categorynews_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Cta Section=====================//

function sen_travel_cta_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_cta_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_cta_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( sen_travel_cta_active( $control ) && ( 'cta_custom' == $content_type ) );
} 

function sen_travel_cta_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( sen_travel_cta_active( $control ) && ( 'cta_page' == $content_type ) );
}

function sen_travel_cta_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( sen_travel_cta_active( $control ) && ( 'cta_post' == $content_type ) );
}


//========================Team Section=====================//

function sen_travel_team_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_team_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_team_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( sen_travel_team_active( $control ) && ( 'team_custom' == $content_type ) );
} 

function sen_travel_team_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( sen_travel_team_active( $control ) && ( 'team_page' == $content_type ) );
}

function sen_travel_team_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( sen_travel_team_active( $control ) && ( 'team_post' == $content_type ) );
}

function sen_travel_team_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( sen_travel_team_active( $control ) && ( 'team_category' == $content_type ) );
}


//========================Catering Section=====================//

function sen_travel_catering_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_catering_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_catering_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[catering_content_type]' )->value();
    return ( sen_travel_catering_active( $control ) && ( 'catering_custom' == $content_type ) );
} 

function sen_travel_catering_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[catering_content_type]' )->value();
    return ( sen_travel_catering_active( $control ) && ( 'catering_page' == $content_type ) );
}

function sen_travel_catering_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[catering_content_type]' )->value();
    return ( sen_travel_catering_active( $control ) && ( 'catering_post' == $content_type ) );
}

function sen_travel_catering_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[catering_content_type]' )->value();
    return ( sen_travel_catering_active( $control ) && ( 'catering_category' == $content_type ) );
}

//========================Project Section=====================//

function product_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_project_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function product_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( product_active( $control ) && ( 'project_page' == $content_type ) );
}

function product_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( product_active( $control ) && ( 'project_post' == $content_type ) );
}

function product_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( product_active( $control ) && ( 'project_category' == $content_type ) );
}

//========================Event Section=====================//

function sen_travel_event_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_event_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
// Completed Event

function sen_travel_event_completed_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_event_completed_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_event_completed_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_content_type]' )->value();
    return ( sen_travel_event_completed_active( $control ) && ( 'event_page' == $content_type ) );
}

function sen_travel_event_completed_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_content_type]' )->value();
    return ( sen_travel_event_completed_active( $control ) && ( 'event_post' == $content_type ) );
}

function sen_travel_event_completed_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_content_type]' )->value();
    return ( sen_travel_event_completed_active( $control ) && ( 'event_category' == $content_type ) );
}

// Upcoming Event

function sen_travel_event_upcoming_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_event_upcoming_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_event_upcoming_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_upcoming_content_type]' )->value();
    return ( sen_travel_event_upcoming_active( $control ) && ( 'event_upcoming_page' == $content_type ) );
}

function sen_travel_event_upcoming_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_upcoming_content_type]' )->value();
    return ( sen_travel_event_upcoming_active( $control ) && ( 'event_upcoming_post' == $content_type ) );
}

function sen_travel_event_upcoming_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[event_upcoming_content_type]' )->value();
    return ( sen_travel_event_upcoming_active( $control ) && ( 'event_upcoming_category' == $content_type ) );
}

//========================Features Section=====================//

function sen_travel_features_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_features_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_features_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( sen_travel_features_active( $control ) && ( 'features_custom' == $content_type ) );
} 

function sen_travel_features_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( sen_travel_features_active( $control ) && ( 'features_page' == $content_type ) );
}

function sen_travel_features_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( sen_travel_features_active( $control ) && ( 'features_post' == $content_type ) );
}

function sen_travel_features_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( sen_travel_features_active( $control ) && ( 'features_category' == $content_type ) );
}

//========================Conatct Section=====================//

function sen_travel_contact_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_contact_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Testimonial Section=====================//

function sen_travel_testimonial_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_testimonial_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_testimonial_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( sen_travel_testimonial_active( $control ) && ( 'testimonial_custom' == $content_type ) );
} 

function sen_travel_testimonial_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( sen_travel_testimonial_active( $control ) && ( 'testimonial_page' == $content_type ) );
}

function sen_travel_testimonial_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( sen_travel_testimonial_active( $control ) && ( 'testimonial_post' == $content_type ) );
}

function sen_travel_testimonial_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( sen_travel_testimonial_active( $control ) && ( 'testimonial_category' == $content_type ) );
}

//========================Counter Section=====================//
function sen_travel_counter_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_counter_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Instagram Section=====================//

function sen_travel_instagram_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_instagram_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Porfolio Section=====================//

function sen_travel_portfolio_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_portfolio_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}


//========================Must Read Section=====================//


function sen_travel_mustread_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_mustread_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_mustread_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( sen_travel_mustread_active( $control ) && ( 'mustread_page' == $content_type ) );
}

function sen_travel_mustread_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( sen_travel_mustread_active( $control ) && ( 'mustread_post' == $content_type ) );
}

function sen_travel_mustread_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( sen_travel_mustread_active( $control ) && ( 'mustread_category' == $content_type ) );
}


//========================Popular Section=====================//


function sen_travel_popular_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_popular_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_popular_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( sen_travel_popular_active( $control ) && ( 'popular_page' == $content_type ) );
}

function sen_travel_popular_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( sen_travel_popular_active( $control ) && ( 'popular_post' == $content_type ) );
}

function sen_travel_popular_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( sen_travel_popular_active( $control ) && ( 'popular_category' == $content_type ) );
}

//========================Editor Pick Section=====================//


function sen_travel_editorpick_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_editorpick_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_editorpick_top_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[editorpick_top_content_type]' )->value();
    return ( sen_travel_editorpick_active( $control ) && ( 'editorpick_top_page' == $content_type ) );
}

function sen_travel_editorpick_top_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[editorpick_top_content_type]' )->value();
    return ( sen_travel_editorpick_active( $control ) && ( 'editorpick_top_post' == $content_type ) );
}

function sen_travel_editorpick_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[editorpick_content_type]' )->value();
    return ( sen_travel_editorpick_active( $control ) && ( 'editorpick_page' == $content_type ) );
}

function sen_travel_editorpick_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[editorpick_content_type]' )->value();
    return ( sen_travel_editorpick_active( $control ) && ( 'editorpick_post' == $content_type ) );
}

function sen_travel_editorpick_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[editorpick_content_type]' )->value();
    return ( sen_travel_editorpick_active( $control ) && ( 'editorpick_category' == $content_type ) );
}

//========================Editor Pick Section=====================//


function sen_travel_fixheight_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_fixheight_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_fixheight_right_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[fixheight_right_content_type]' )->value();
    return ( sen_travel_fixheight_active( $control ) && ( 'fixheight_right_page' == $content_type ) );
}

function sen_travel_fixheight_right_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[fixheight_right_content_type]' )->value();
    return ( sen_travel_fixheight_active( $control ) && ( 'fixheight_right_post' == $content_type ) );
}

function sen_travel_fixheight_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[fixheight_content_type]' )->value();
    return ( sen_travel_fixheight_active( $control ) && ( 'fixheight_page' == $content_type ) );
}

function sen_travel_fixheight_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[fixheight_content_type]' )->value();
    return ( sen_travel_fixheight_active( $control ) && ( 'fixheight_post' == $content_type ) );
}

function sen_travel_fixheight_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[fixheight_content_type]' )->value();
    return ( sen_travel_fixheight_active( $control ) && ( 'fixheight_category' == $content_type ) );
}

//========================List Section=====================//


function sen_travel_list_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_list_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_list_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[list_content_type]' )->value();
    return ( sen_travel_list_active( $control ) && ( 'list_page' == $content_type ) );
}

function sen_travel_list_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[list_content_type]' )->value();
    return ( sen_travel_list_active( $control ) && ( 'list_post' == $content_type ) );
}

function sen_travel_list_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[list_content_type]' )->value();
    return ( sen_travel_list_active( $control ) && ( 'list_category' == $content_type ) );
}

//========================Recent Section=====================//


function sen_travel_recent_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_recent_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_recent_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[recent_content_type]' )->value();
    return ( sen_travel_recent_active( $control ) && ( 'recent_page' == $content_type ) );
}

function sen_travel_recent_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[recent_content_type]' )->value();
    return ( sen_travel_recent_active( $control ) && ( 'recent_post' == $content_type ) );
}

function sen_travel_recent_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[recent_content_type]' )->value();
    return ( sen_travel_recent_active( $control ) && ( 'recent_category' == $content_type ) );
}

//========================Flash Section=====================//


function sen_travel_flash_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_flash_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_flash_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[flash_content_type]' )->value();
    return ( sen_travel_flash_active( $control ) && ( 'flash_page' == $content_type ) );
}

function sen_travel_flash_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[flash_content_type]' )->value();
    return ( sen_travel_flash_active( $control ) && ( 'flash_post' == $content_type ) );
}

function sen_travel_flash_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[flash_content_type]' )->value();
    return ( sen_travel_flash_active( $control ) && ( 'flash_category' == $content_type ) );
}

//========================Highlights Section=====================//


function sen_travel_highlights_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_highlights_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_highlights_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[highlights_content_type]' )->value();
    return ( sen_travel_highlights_active( $control ) && ( 'highlights_page' == $content_type ) );
}

function sen_travel_highlights_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[highlights_content_type]' )->value();
    return ( sen_travel_highlights_active( $control ) && ( 'highlights_post' == $content_type ) );
}

function sen_travel_highlights_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[highlights_content_type]' )->value();
    return ( sen_travel_highlights_active( $control ) && ( 'highlights_category' == $content_type ) );
}

//========================Featuredpost Section=====================//
function sen_travel_featuredpost_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featuredpost_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function sen_travel_featuredpost_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featuredpost_content_type]' )->value();
    return ( sen_travel_featuredpost_active( $control ) && ( 'featuredpost_page' == $content_type ) );
}

function sen_travel_featuredpost_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featuredpost_content_type]' )->value();
    return ( sen_travel_featuredpost_active( $control ) && ( 'featuredpost_post' == $content_type ) );
}

function sen_travel_featuredpost_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featuredpost_content_type]' )->value();
    return ( sen_travel_featuredpost_active( $control ) && ( 'featuredpost_category' == $content_type ) );
}

//========================GalleryView Section=====================//


function sen_travel_galleryview_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_galleryview_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_galleryview_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[galleryview_content_type]' )->value();
    return ( sen_travel_galleryview_active( $control ) && ( 'galleryview_page' == $content_type ) );
}

function sen_travel_galleryview_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[galleryview_content_type]' )->value();
    return ( sen_travel_galleryview_active( $control ) && ( 'galleryview_post' == $content_type ) );
}

function sen_travel_galleryview_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[galleryview_content_type]' )->value();
    return ( sen_travel_galleryview_active( $control ) && ( 'galleryview_category' == $content_type ) );
}

//========================Gallery Section=====================//


function sen_travel_gallery_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_gallery_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_gallery_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( sen_travel_gallery_active( $control ) && ( 'gallery_page' == $content_type ) );
}

function sen_travel_gallery_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( sen_travel_gallery_active( $control ) && ( 'gallery_post' == $content_type ) );
}

function sen_travel_gallery_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( sen_travel_gallery_active( $control ) && ( 'gallery_category' == $content_type ) );
}
function sen_travel_gallery_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( sen_travel_gallery_active( $control ) && ( 'gallery_custom' == $content_type ) );
}

//========================Nature Gallery Section=====================//


function sen_travel_naturegallery_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_naturegallery_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_naturegallery_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturegallery_content_type]' )->value();
    return ( sen_travel_naturegallery_active( $control ) && ( 'naturegallery_page' == $content_type ) );
}

function sen_travel_naturegallery_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturegallery_content_type]' )->value();
    return ( sen_travel_naturegallery_active( $control ) && ( 'naturegallery_post' == $content_type ) );
}

function sen_travel_naturegallery_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturegallery_content_type]' )->value();
    return ( sen_travel_naturegallery_active( $control ) && ( 'naturegallery_category' == $content_type ) );
}

//========================Right Slide Section=====================//


function sen_travel_rightslide_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_rightslide_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_rightslide_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[rightslide_content_type]' )->value();
    return ( sen_travel_rightslide_active( $control ) && ( 'rightslide_page' == $content_type ) );
}

function sen_travel_rightslide_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[rightslide_content_type]' )->value();
    return ( sen_travel_rightslide_active( $control ) && ( 'rightslide_post' == $content_type ) );
}

function sen_travel_rightslide_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[rightslide_content_type]' )->value();
    return ( sen_travel_rightslide_active( $control ) && ( 'rightslide_category' == $content_type ) );
}

//========================Nature Featured Section=====================//


function sen_travel_naturefeatured_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_naturefeatured_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_naturefeatured_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturefeatured_content_type]' )->value();
    return ( sen_travel_naturefeatured_active( $control ) && ( 'naturefeatured_page' == $content_type ) );
}

function sen_travel_naturefeatured_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturefeatured_content_type]' )->value();
    return ( sen_travel_naturefeatured_active( $control ) && ( 'naturefeatured_post' == $content_type ) );
}

function sen_travel_naturefeatured_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[naturefeatured_content_type]' )->value();
    return ( sen_travel_naturefeatured_active( $control ) && ( 'naturefeatured_category' == $content_type ) );
}

//========================Travel Section=====================//


function sen_travel_admissionprocess_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_admissionprocess_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_admissionprocess_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[admissionprocess_content_type]' )->value();
    return ( sen_travel_admissionprocess_active( $control ) && ( 'admissionprocess_page' == $content_type ) );
}

function sen_travel_admissionprocess_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[admissionprocess_content_type]' )->value();
    return ( sen_travel_admissionprocess_active( $control ) && ( 'admissionprocess_post' == $content_type ) );
}

function sen_travel_admissionprocess_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[admissionprocess_content_type]' )->value();
    return ( sen_travel_admissionprocess_active( $control ) && ( 'admissionprocess_category' == $content_type ) );
}


//========================Blog Section=====================//

function sen_travel_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( sen_travel_blog_active( $control ) && ( 'blog_page' == $content_type ) );
}

function sen_travel_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( sen_travel_blog_active( $control ) && ( 'blog_post' == $content_type ) );
}

function sen_travel_blog_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( sen_travel_blog_active( $control ) && ( 'blog_category' == $content_type ) );
}

//========================Message Section=====================//

function sen_travel_message_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_message_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_message_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( sen_travel_message_active( $control ) && ( 'message_custom' == $content_type ) );
} 

function sen_travel_message_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( sen_travel_message_active( $control ) && ( 'message_page' == $content_type ) );
}

function sen_travel_message_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( sen_travel_message_active( $control ) && ( 'message_post' == $content_type ) );
}
//========================Fitness Category Section=====================//

function sen_travel_catlist_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_catlist_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function sen_travel_catlist_product_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[catlist_content_type]' )->value();
    return ( sen_travel_catlist_active( $control ) && ( 'product-category' == $content_type ) );
}

function sen_travel_catlist_post_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[catlist_content_type]' )->value();
    return ( sen_travel_catlist_active( $control ) && ( 'post-category' == $content_type ) );
}

//========================Video Section=====================//


function sen_travel_video_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_video_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_video_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[video_content_type]' )->value();
    return ( sen_travel_video_active( $control ) && ( 'video_page' == $content_type ) );
}

function sen_travel_video_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[video_content_type]' )->value();
    return ( sen_travel_video_active( $control ) && ( 'video_post' == $content_type ) );
}

function sen_travel_video_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[video_content_type]' )->value();
    return ( sen_travel_video_active( $control ) && ( 'video_category' == $content_type ) );
}

//========================Client Section=====================//

function sen_travel_client_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_client_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}


//========================Shop Product Category Section=====================//

function sen_travel_shopproduct_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_shopproduct_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function sen_travel_shopproduct_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( sen_travel_shopproduct_active( $control ) && ( 'shopproduct_page' == $content_type ) );
}

function sen_travel_shopproduct_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( sen_travel_shopproduct_active( $control ) && ( 'shopproduct_post' == $content_type ) );
}

function sen_travel_shopproduct_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( sen_travel_shopproduct_active( $control ) && ( 'shopproduct_category' == $content_type ) );
}

function sen_travel_shopproduct_product( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( sen_travel_shopproduct_active( $control ) && ( 'product' == $content_type ) );
}

function sen_travel_shopproduct_product_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( sen_travel_shopproduct_active( $control ) && ( 'product-category' == $content_type ) );
}

function sen_travel_shopproduct_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return  sen_travel_shopproduct_seperator( $control ) && ( in_array( $content_type, array( 'shopproduct_page', 'shopproduct_post', 'shopproduct_custom' ) ) ) ;
}

//========================Layout=====================//

function topbar_contact_info_option( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[topbar_layout_option]' )->value();
    return ( ( 'contact-info-option' == $content_type ) );
}
function topbar_current_date_option( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[topbar_layout_option]' )->value();
    return ( ( 'current-date-option' == $content_type ) );
}
function sen_travel_header_three( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return ( ( 'header-three' == $content_type ) );
}
function sen_travel_header_five( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return ( ( 'header-five' == $content_type ) );
}
function sen_travel_header_nine( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return ( ( 'header-nine' == $content_type ) );
}
function sen_travel_kids_menu( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return ( ( 'kids-menu' == $content_type ) );
}
function sen_travel_medical_layout( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return ( ( 'home-medical' == $content_type ) );
}
function sen_travel_education_layout( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return ( ( 'home-education' == $content_type ) );
}

function sen_travel_header_background_image( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[header_layout_options]' )->value();
    return in_array($home_layout,array('header-two','header-three'));
}


function sen_travel_slider_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-blog','home-normal-blog','home-classic-blog','home-normal-magazine','home-travel', 'home-corporate','home-nature', 'home-medical','home-education','home-fitness'));
}

function sen_travel_services_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-travel', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function sen_travel_information_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-travel', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function sen_travel_team_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-travel', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function sen_travel_testimonial_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-travel', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function sen_travel_pricing_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-travel', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function sen_travel_cta_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-travel', 'home-corporate', 'home-medical','home-education','home-fitness'));
}

function sen_travel_client_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-travel', 'home-corporate', 'home-medical','home-education','home-fitness'));
}


function sen_travel_mustread_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine','home-blog','home-normal-magazine','home-normal-blog', 'home-travel', 'home-corporate', 'home-medical','home-education','home-fitness','home-minimal-blog','home-classic-blog'));
}
function product_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-corporate'));
}

function sen_travel_admissionprocess_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-blog','home-normal-magazine','home-normal-blog'));
}

function sen_travel_message_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-normal-blog','home-travel', 'home-corporate', 'home-medical','home-education','home-fitness','home-minimal-blog','home-classic-blog')); 
}

function sen_travel_topbar_current_date_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-normal-magazine','home-magazine', 'home-corporate','home-education','home-fitness'));
}

function sen_travel_topbar_contact_info_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-blog','home-normal-blog', 'home-travel', 'home-corporate'));
}
function sen_travel_home_magazine_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-magazine'));
}
function sen_travel_gallery_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-corporate'));
}
function sen_travel_gallerypost_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-classic-blog'));
}
function sen_travel_event_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-fitness'));
}
function sen_travel_counter_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-education','home-fitness'));
}
function sen_travel_fitnesscat_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-fitness','home-minimal-blog','home-classic-blog'));
}
function sen_travel_shopproduct_design_enable( $control ) {
    $home_layout = $control->manager->get_setting( 'theme_options[homepage_design_layout_options]' )->value();
    return in_array($home_layout,array('home-fitness','home-education'));
}

function sen_travel_blog_four_design_enable( $control ) {
    $blog_layout = $control->manager->get_setting( 'theme_options[blog_layout_content_type]' )->value();
    return in_array($blog_layout,array('blog-four'));
}

/**
 * Active Callback for top bar section
 */
function sen_travel_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function sen_travel_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

