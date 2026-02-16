jQuery(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/sen_slider.default', function($scope) {
        var $slider = $scope.find('.slider-wrapper');

        // Only initialize if there's at least one slide
        if ($slider.length && $slider.find('.slick-item').length > 0) {
            // Destroy if already initialized (to avoid duplication)
            if ($slider.hasClass('slick-initialized')) {
                $slider.slick('unslick');
            }

            // Initialize with custom settings
            $slider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                speed: 800,
                dots: true,
                arrows: false,
                autoplay: true,
                fade: false
            });
        }
    });
});
