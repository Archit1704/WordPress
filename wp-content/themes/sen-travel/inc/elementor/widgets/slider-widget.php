<?php

	if (!defined('ABSPATH')) {
		exit; // Exit if accessed directly.
	}

	/**
	 * Elementor Slider Widget.
	 *
	 * Elementor widget that inserts an embbedable content into the page, from any given URL.
	 *
	 * @since 1.0.0
	 * Sen Pro
	 */
	class Sen_Travel_Elementor_Slider_Widget extends \Elementor\Widget_Base {
		/**
		 * Get widget name.
		 *
		 * Retrieve Slider widget name.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return string Widget name.
		 */
		public function get_name() {
			return 'sen_slider';
		}

		/**
		 * Get widget title.	
		 *
		 * Retrieve Slider widget title.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return string Widget title.
		 */
		public function get_title() {
			return esc_html__( 'Sen Slider', 'sen-travel' );
		}

		/**
		 * Get widget icon.
		 *
		 * Retrieve Slider widget icon.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return string Widget icon.
		 */
		public function get_icon() {
			return 'eicon-parallax';
		}

		/**
		 * Get custom help URL.
		 *
		 * Retrieve a URL where the user can get more information about the widget.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return string Widget help URL.
		 */
		public function get_custom_help_url() {
			return 'https://developers.elementor.com/docs/widgets/';
		}

		/**
		 * Get widget categories.
		 *
		 * Retrieve the list of categories the Slider widget belongs to.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return array Widget categories.
		 */
		public function get_categories() {
			return [ 'general' ];
		}

		/**
		 * Get widget keywords.
		 *
		 * Retrieve the list of keywords the Slider widget belongs to.
		 *
		 * @since 1.0.0
		 * @access public
		 * @return array Widget keywords.
		 */
		public function get_keywords() {
			return [ 'slider', 'sen', 'text' ];
		}

		/**
		 * Register Slider widget controls.
		 *
		 * Add input fields to allow the user to customize the widget settings.
		 *
		 * @since 1.0.0
		 * @access protected
		 */
		protected function register_controls() {

			$this->start_controls_section(
				'content_section',
				[
					'label' => esc_html__( 'Content', 'sen-travel' ),
					'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
				]
			);
			$this->add_control(
			'slider_slide_content',
				[
					'label' => esc_html__( 'Slider Content', 'sen-travel' ),
					'type' => \Elementor\Controls_Manager::REPEATER,
					'fields' => 
					[
						[
							'name' => 'sen_slider_title',
							'label' => esc_html__( 'Title', 'sen-travel' ),
							'type' => \Elementor\Controls_Manager::TEXT,
							'default' => esc_html__( 'Slider Title' , 'sen-travel' ),
							'label_block' => true,
							'placeholder' => esc_html__( 'Enter your title', 'sen-travel' ),

						],
						[
							'name' => 'sen_slider_title_tag',
							'label' => __('Title HTML Tag', 'sen-travel'),
			                'type' => \Elementor\Controls_Manager::SELECT,
			                'options' => [
			                    'h1' => 'H1',
			                    'h2' => 'H2',
			                    'h3' => 'H3',
			                    'h4' => 'H4',
			                    'h5' => 'H5',
			                    'h6' => 'H6',
			                    'div' => 'div',
			                    'span' => 'span',
			                    'p' => 'p',
			                ],
			                'default' => 'h1',
						],
						[
							'name'  => 'slider_image',
							'label' => esc_html__( 'Choose Image', 'sen-travel' ),
							'type' => \Elementor\Controls_Manager::MEDIA,
							'default' => [
								'url' => \Elementor\Utils::get_placeholder_image_src(),
							],
						],
						[
							'name' => 'slider_description',
							'label' => esc_html__( 'Slider Content', 'sen-travel' ),
							'type' => \Elementor\Controls_Manager::WYSIWYG,
							'default' => esc_html__( 'Slider Content' , 'sen-travel' ),
							'show_label' => false,
						],
						[
						    'name' => 'read_more_button_text',
						    'label' => esc_html__( 'Read More Button Text', 'sen-travel' ),
						    'type' => \Elementor\Controls_Manager::TEXT,
						    'default' => esc_html__( 'Read More', 'sen-travel' ),
						],
						[
						    'name' => 'read_more_button_url',
						    'label' => esc_html__( 'Read More Button URL', 'sen-travel' ),
						    'type' => \Elementor\Controls_Manager::URL,
						    'default' => [
						        'url' => '#',
						    ],
						    'label_block' => true,
						],
						[
						    'name' => 'contact_button_text',
						    'label' => esc_html__( 'Contact Us Button Text', 'sen-travel' ),
						    'type' => \Elementor\Controls_Manager::TEXT,
						    'default' => esc_html__( 'Contact Us', 'sen-travel' ),
						],
						[
						    'name' => 'contact_button_url',
						    'label' => esc_html__( 'Contact Us Button URL', 'sen-travel' ),
						    'type' => \Elementor\Controls_Manager::URL,
						    'default' => [
						        'url' => '#',
						    ],
						    'label_block' => true,
						],
					],
					'default' => [
						[
							'sen_slider_title' => esc_html__( 'Title #1', 'sen-travel' ),
							'slider_description' => esc_html__( 'Item content. Click the edit button to change this text.', 'sen-travel' ),
						],
						[
							'sen_slider_title' => esc_html__( 'Title #2', 'sen-travel' ),
							'slider_description' => esc_html__( 'Item content. Click the edit button to change this text.', 'sen-travel' ),
						],
					],
					'title_field' => '{{{ sen_slider_title }}}',
				]
			);

			$this->end_controls_section(); //End Content Section

			//Start Style Section
			$this->start_controls_section(
				'style_section',
				[
					'label' => esc_html__( 'Style', 'sen-travel' ),
					'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				]
			);
				
				$this->add_control(
				    'overlay_color',
				    [
				        'label' => __( 'Overlay Color', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::COLOR,
				        'default' => 'rgba(0,0,0,0.3)',
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider .slick-item .overlay' => 'background-color: {{VALUE}};',
				        ],
				    ]
				);
				$this->add_control(
				    'overlay_opacity',
				    [
				        'label' => __( 'Overlay Opacity', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::SLIDER,
				        'size_units' => [ '%' ],
				        'range' => [
				            '%' => [
				                'min' => 0,
				                'max' => 100,
				            ],
				        ],
				        'default' => [
				            'size' => 0,
				        ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider .slick-item .overlay' => 'opacity: {{SIZE}}%;',
				        ],
				    ]
				);
				$this->add_control(
				    'sen_slider_container_padding',
				    [
				        'label' => esc_html__( 'Content Padding', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider .entry-container' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 20,
							'right' => 20,
							'left' => 20,
							'bottom' => 20,
						],
				    ]
				);
			$this->end_controls_section();//End Style Section

			//Start Title Style Tab
			$this->start_controls_section(
	            'sen_slider_title_tab',
	            [
	                'label' => __('Title', 'sen-travel'),
	                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	            ]
	        );
				$this->add_control(
				    'sen_slider_title_padding',
				    [
				        'label' => esc_html__( 'Padding', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider .entry-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 0,
							'right' => 0,
							'left' => 0,
							'bottom' => 10,
						],
				    ]
				);
				$this->add_control(
				    'sen_slider_title_margin',
				    [
				        'label' => esc_html__( 'Margin', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider .entry-header' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 0,
							'right' => 0,
							'left' => 0,
							'bottom' => 0,
						],
				    ]
				);
				$this->add_control(
					'sen_slider_title_option',
					[
						'type' => \Elementor\Controls_Manager::HEADING,
						'label' => esc_html__( 'Title Option', 'sen-travel' ),
						'separator' => 'before',
					]
				);

				$this->add_control(
					'sen_slider_color_title',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Color Option', 'sen-travel' ),
						'default' => '#222',
						'selectors' => [
							'{{WRAPPER}} #sen-slider .entry-title' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'sen_slider_title_typography',
						'selector' => '{{WRAPPER}} #sen-slider .entry-title',
						'fields_options' => [
							'typography' => ['default' => 'custom'],
							'font_size' => [
								'default' => [
									'size' => 46,
									'unit' => 'px',
								],
							],
						],
					]
				);

				$this->add_group_control(
					\Elementor\Group_Control_Text_Shadow::get_type(),
					[
						'name' => 'sen_slider_text_shadow',
						'selector' => '{{WRAPPER}} #sen-slider .entry-title',
					]
				);

			$this->end_controls_section(); //End Title Style Tab


			//Start Description Style Tab
			$this->start_controls_section(
	            'sen_slider_description_tab',
	            [
	                'label' => __('Description', 'sen-travel'),
	                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	            ]
	        );

				$this->add_control(
				    'sen_slider_description_padding',
				    [
				        'label' => esc_html__( 'Padding', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider .entry-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 0,
							'right' => 0,
							'left' => 0,
							'bottom' => 10,
						],
				    ]
				);
				$this->add_control(
				    'sen_slider_description_margin',
				    [
				        'label' => esc_html__( 'Margin', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider .entry-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 0,
							'right' => 0,
							'left' => 0,
							'bottom' => 20,
						],
				    ]
				);
				$this->add_control(
					'sen_slider_description_option',
					[
						'type' => \Elementor\Controls_Manager::HEADING,
						'label' => esc_html__( 'Description Option', 'sen-travel' ),
						'separator' => 'before',
					]
				);

				$this->add_control(
					'sen_slider_color_description',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Color Option', 'sen-travel' ),
						'default' => '#000',
						'selectors' => [
							'{{WRAPPER}} #sen-slider .entry-content p' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'sen_slider_description_typography',
						'selector' => '{{WRAPPER}} #sen-slider .entry-content p',
						'fields_options' => [
							'typography' => ['default' => 'custom'],
							'font_size' => [
								'default' => [
									'size' => 18,
									'unit' => 'px',
								],
							],
						],
					]
				);

			$this->end_controls_section();//End Description Style Tab

			//Start Read More Button Style Tab
			$this->start_controls_section(
	            'sen_slider_read_more_tab',
	            [
	                'label' => __('Read More Button', 'sen-travel'),
	                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	            ]
	        );

				$this->add_control(
					'sen_slider_read_more_option',
					[
						'type' => \Elementor\Controls_Manager::HEADING,
						'label' => esc_html__( 'Read More Button Option', 'sen-travel' ),
						'separator' => 'before',
					]
				);
				$this->add_control(
				    'sen_slider_read_more_padding',
				    [
				        'label' => esc_html__( 'Padding', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider a.read-more-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 15,
							'right' => 40,
							'left' => 40,
							'bottom' => 15,
						],
				    ]
				);
				$this->add_control(
				    'sen_slider_read_more_margin',
				    [
				        'label' => esc_html__( 'Margin', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider a.read-more-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 0,
							'right' => 10,
							'left' => 0,
							'bottom' => 0,
						],
				    ]
				);

				$this->add_control(
					'sen_slider_color_read_more',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Color Option', 'sen-travel' ),
						'default' => '#fff',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.read-more-btn' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_control(
					'sen_slider_color_hover_read_more',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Hover Color Option', 'sen-travel' ),
						'default' => '#fff',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.read-more-btn:hover' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_control(
					'sen_slider_background_color_read_more',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Background Color Option', 'sen-travel' ),
						'default' => '#034951',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.read-more-btn' => 'background-color: {{VALUE}}',
						],
					]
				);
				$this->add_control(
					'sen_slider_background_color_hover_read_more',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Hover Background Color Option', 'sen-travel' ),
						'default' => '#10A4B0',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.read-more-btn:hover, {{WRAPPER}} a.read-more-btn:focus' => 'background-color: {{VALUE}}',
						],
					]
				);

				$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'sen_slider_read_more_typography',
						'selector' => '{{WRAPPER}} #sen-slider a.read-more-btn',
						'fields_options' => [
							'typography' => ['default' => 'custom'],
							'font_size' => [
								'default' => [
									'size' => 20,
									'unit' => 'px',
								],
							],
						],
					]
				);
				$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'sen_slider_read_more_border',
						'selector' => '{{WRAPPER}} #sen-slider a.read-more-btn',
					]
				);
				$this->add_control(
					'sen_slider_read_more_border_radius',
					[
						'label' => esc_html__( 'Border Radius', 'sen-travel' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 200,
								'step' => 1,
							],
							'%' => [
								'min' => 0,
								'max' => 100,
							],
						],
						'default' => [
							'unit' => 'px',
							'size' => 15,
						],
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.read-more-btn' => 'border-radius: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_controls_section();//End Read More Button Style Tab
			//Start Contact Button Style Tab
			$this->start_controls_section(
	            'sen_slider_contact_button_tab',
	            [
	                'label' => __('Contact Button', 'sen-travel'),
	                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
	            ]
	        );

				$this->add_control(
					'sen_slider_contact_button_option',
					[
						'type' => \Elementor\Controls_Manager::HEADING,
						'label' => esc_html__( 'Contact Button Option', 'sen-travel' ),
						'separator' => 'before',
					]
				);
				$this->add_control(
				    'sen_slider_contact_button_padding',
				    [
				        'label' => esc_html__( 'Padding', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider a.contact-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 15,
							'right' => 40,
							'left' => 40,
							'bottom' => 15,
						],
				    ]
				);
				$this->add_control(
				    'sen_slider_contact_button_margin',
				    [
				        'label' => esc_html__( 'Margin', 'sen-travel' ),
				        'type' => \Elementor\Controls_Manager::DIMENSIONS,
				        'size_units' => [ 'px', '%', 'em' ],
				        'selectors' => [
				            '{{WRAPPER}} #sen-slider a.contact-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				        ],
				        'default' => [
							'unit' => 'px',
							'top' => 0,
							'right' => 0,
							'left' => 10,
							'bottom' => 0,
						],
				    ]
				);

				$this->add_control(
					'sen_slider_color_contact_button',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Color Option', 'sen-travel' ),
						'default' => '#fff',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.contact-btn' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_control(
					'sen_slider_color_hover_contact_button',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Hover Color Option', 'sen-travel' ),
						'default' => '#fff',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.contact-btn:hover' => 'color: {{VALUE}}',
						],
					]
				);

				$this->add_control(
					'sen_slider_background_color_contact_button',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Background Color Option', 'sen-travel' ),
						'default' => '#964834',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.contact-btn' => 'background-color: {{VALUE}}',
						],
					]
				);
				$this->add_control(
					'sen_slider_background_color_hover_contact_button',
					[
						'type' => \Elementor\Controls_Manager::COLOR,
						'label' => esc_html__( 'Hover Background Color Option', 'sen-travel' ),
						'default' => '#10A4B0',
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.contact-btn:hover, {{WRAPPER}} #sen-slider a.contact-btn:focus' => 'background-color: {{VALUE}}',
						],
					]
				);

				$this->add_group_control(
					\Elementor\Group_Control_Typography::get_type(),
					[
						'name' => 'sen_slider_contact_button_typography',
						'selector' => '{{WRAPPER}} #sen-slider a.contact-btn',
						'fields_options' => [
							'typography' => ['default' => 'custom'],
							'font_size' => [
								'default' => [
									'size' => 20,
									'unit' => 'px',
								],
							],
						],
					]
				);
				$this->add_group_control(
					\Elementor\Group_Control_Border::get_type(),
					[
						'name' => 'sen_slider_contact_button_border',
						'selector' => '{{WRAPPER}} #sen-slider a.contact-btn',
					]
				);
				$this->add_control(
					'sen_slider_contact_button_border_radius',
					[
						'label' => esc_html__( 'Border Radius', 'sen-travel' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
						'range' => [
							'px' => [
								'min' => 0,
								'max' => 200,
								'step' => 1,
							],
							'%' => [
								'min' => 0,
								'max' => 100,
							],
						],
						'default' => [
							'unit' => 'px',
							'size' => 15,
						],
						'selectors' => [
							'{{WRAPPER}} #sen-slider a.contact-btn' => 'border-radius: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_controls_section();//End Read More Button Style Tab

			
		}
		/**
		 * Render Slider widget output on the frontend.
		 *
		 * Written in PHP and used to generate the final HTML.
		 *
		 * @since 1.0.0
		 * @access protected
		 */
		protected function render() { 
			$settings = $this->get_settings_for_display();
			?>
			<?php if ( ! empty( $settings['slider_slide_content'] ) ) : ?>
				<!-----Start rendering the output---->
				<div id="sen-slider" class="sen-slider">
				    <div class="slider-wrapper" data-slick='{"slidesToShow": 1,
				     "slidesToScroll": 1, 
				     "infinite": true, 
				     "speed": 2000, 
				     "dots": true, 
				     "arrows":false, 
				     "autoplay": true, 
				     "fade": true }'>

						<?php if ( $settings['slider_slide_content'] ) { ?>
							<?php foreach (  $settings['slider_slide_content'] as $item ) { ?>
				                <article class=" slick-item" style="background-image: url(<?php echo esc_url( $item['slider_image']['url'] ) ?>);">
				                	
					                	<div class="overlay"></div>
					                
				                	<div class="featured-image">
				                		<img src="<?php echo esc_url( $item['slider_image']['url'] ) ?>">
				                	</div>
				                	<div class="wrapper">
					                    <div class="entry-container">
					                    	<?php $tag = ! empty( $item['sen_slider_title_tag'] ) ? $item['sen_slider_title_tag'] : 'h2'; ?>
					                        <?php if ($item['sen_slider_title']) : ?>
					                        	<div class="entry-header">
							                    	<<?php echo esc_attr( $tag ); ?> class="entry-title"><?php echo(esc_html($item['sen_slider_title'])) ?></<?php echo esc_attr( $tag ); ?>>
							                    </div>
							               <?php endif; ?>
				                            <div class="entry-content">
				                                <?php echo wp_kses_post($item['slider_description']); ?>
				                            </div><!-- .entry-content -->
				                            <div class="read-more-btn">
											    <?php if ( ! empty( $item['read_more_button_text'] ) && ! empty( $item['read_more_button_url']['url'] ) ) : ?>
											        <a class="slider-btn read-more-btn" href="<?php echo esc_url( $item['read_more_button_url']['url'] ); ?>" <?php echo $item['read_more_button_url']['is_external'] ? 'target="_blank"' : ''; ?>>
											            <?php echo esc_html( $item['read_more_button_text'] ); ?>
											        </a>
											    <?php endif; ?>

											    <?php if ( ! empty( $item['contact_button_text'] ) && ! empty( $item['contact_button_url']['url'] ) ) : ?>
											        <a class="slider-btn contact-btn" href="<?php echo esc_url( $item['contact_button_url']['url'] ); ?>" <?php echo $item['contact_button_url']['is_external'] ? 'target="_blank"' : ''; ?>>
											            <?php echo esc_html( $item['contact_button_text'] ); ?>
											        </a>
											    <?php endif; ?>
											</div>
					                    </div><!-- .entry-container -->
				                    </div>
				                </article>
				            <?php } 
				        } ?>
					</div>
				</div>
				<!-----End rendering the output---->
			<?php endif ?>

		<?php }  
		public function get_style_depends() {
	        return [ 'slick', 'slick-theme' ];
	    }

	    public function get_script_depends() {
	        return [ 'slick' ];
	    }
	}