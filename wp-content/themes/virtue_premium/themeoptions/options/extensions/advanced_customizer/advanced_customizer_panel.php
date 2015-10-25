<?php

    /**
     * Customizer section representing widget area (sidebar).
     *
     * @package    WordPress
     * @subpackage Customize
     * @since      4.1.0
     * @see        WP_Customize_Section
     */
    class Redux_Advanced_Customizer_Panel extends WP_Customize_Panel {

        /**
         * Constructor.
         * Any supplied $args override class property defaults.
         *
         * @since 4.0.0
         *
         * @param WP_Customize_Manager $manager Customizer bootstrap instance.
         * @param string               $id      An specific ID for the panel.
         * @param array                $args    Panel arguments.
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

            $this->sections = array(); // Users cannot customize the $sections array.

            // TODO Redux addition
            if ( isset( $args['section'] ) ) {
                $this->section = $args['section'];
            }
        }

        /**
         * Render the panel container, and then its contents.
         *
         * @since  4.0.0
         * @access protected
         */
        protected function render() {
            print_r( $this->section );
            $classes = 'accordion-section redux-main redux-panel control-section control-panel control-panel-' . $this->type;
            ?>
            <li id="accordion-panel-<?php echo esc_attr( $this->id ); ?>" class="<?php echo esc_attr( $classes ); ?>" data-width="<?php echo isset( $this->section['customizer_width'] ) ? $this->section['customizer_width'] : '' ;?>">
                <h3 class="accordion-section-title" tabindex="0">
                    <?php if ( isset( $this->section['icon'] ) && ! empty( $this->section['icon'] ) ) : ?>
                        <i class="<?php echo $this->section['icon']; ?>"></i>
                    <?php endif; ?>
                    <?php echo esc_html( $this->title ); ?>
                    <span class="screen-reader-text"><?php _e( 'Press return or enter to open this panel' ); ?></span>
                </h3>
                <ul class="accordion-sub-container control-panel-content">
                    <table class="form-table">
                        <tbody><?php $this->render_content(); ?></tbody>
                    </table>
                </ul>
            </li>
        <?php
        }

        /**
         * Render the sections that have been added to the panel.
         *
         * @since  4.1.0
         * @access protected
         */
        protected function render_content() {
            ?>
            <li class="panel-meta accordion-section redux-panel-meta control-section<?php if ( empty( $this->description ) ) {
                echo ' cannot-expand';
            } ?>">
                <div class="accordion-section-title" tabindex="0">
				<span class="preview-notice"><?php
                        /* translators: %s is the site/panel title in the Customizer */
                        echo sprintf( __( 'You are customizing %s' ), '<strong class="panel-title">' . esc_html( $this->title ) . '</strong>' );
                    ?></span>
                </div>
                <?php if ( ! empty( $this->description ) ) : ?>
                    <div class="accordion-section-content description">
                        <?php echo $this->description; ?>
                    </div>
                <?php endif; ?>
            </li>
        <?php
        }
    }
