<?php
    /**
     * Customizer section representing widget area (sidebar).
     *
     * @package WordPress
     * @subpackage Customize
     *
     * @since 4.1.0
     *
     * @see WP_Customize_Section
     */
    class Redux_Advanced_Customizer_Section extends WP_Customize_Section {

        /**
         * Type of this section.
         *
         * @since 4.1.0
         * @access public
         * @var string
         */
        public $type = 'default';

        /**
         * Constructor.
         * Any supplied $args override class property defaults.
         *
         * @since 3.4.0
         *
         * @param WP_Customize_Manager $manager Customizer bootstrap instance.
         * @param string               $id      An specific ID of the section.
         * @param array                $args    Section arguments.
         */
        public function __construct( $manager, $id, $args = array() ) {
            $keys = array_keys( get_object_vars( $this ) );
            foreach ( $keys as $key ) {
                if ( isset( $args[ $key ] ) ) {
                    $this->$key = $args[ $key ];
                }
            }

            $this->manager = $manager;
            $this->id      = $id;
            if ( empty( $this->active_callback ) ) {
                $this->active_callback = array( $this, 'active_callback' );
            }
            self::$instance_count += 1;
            $this->instance_number = self::$instance_count;

            $this->controls = array(); // Users cannot customize the $controls array.

            // TODO Redux addition
            if ( isset( $args['section'] ) ) {
                $this->section = $args['section'];
            }
        }

        /**
         * Render the section, and the controls that have been added to it.
         *
         * @since 3.4.0
         */
        protected function render() {


            $classes = 'accordion-section redux-section control-section control-section-' . $this->type;
            ?>
            <li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="<?php echo esc_attr( $classes ); ?>" data-width="<?php echo isset( $this->section['customizer_width'] ) ? $this->section['customizer_width'] : '' ;?>">
                <h3 class="accordion-section-title" tabindex="0">
                    <?php if ( isset( $this->section['icon'] ) && ! empty( $this->section['icon'] ) ) : ?>
                        <i class="<?php echo $this->section['icon']; ?>"></i>
                    <?php endif; ?>
                    <?php echo esc_html( $this->title ); ?>
                    <span class="screen-reader-text"><?php _e( 'Press return or enter to expand' ); ?></span>

                </h3>
                <ul class="accordion-section-content redux-main">
                    <?php if ( ! empty( $this->description ) ) : ?>
                        <li class="customize-section-description-container">
                            <p class="description customize-section-description"><?php echo $this->description; ?></p>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php
        }
    }

