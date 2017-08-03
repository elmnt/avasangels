<?php
/**
 * Ava's Angels Contact Info Widget
 *
 * Widget to allow the admin to enter & update contact info
 * to appear on contact & contact-related pages
 *
 * @package ava
 */

class avacontact_widget extends WP_Widget {

   function __construct() {
      parent::__construct(
         'avacontact_widget',
         __('Contact Info', 'ava'), // Name
         array('description' => __('Displays contact info on specific pages', 'ava'),)
      );
   }

   public function form($instance) {

      // address one
      isset($instance['address_one']) ? $addressone = $instance['address_one'] : null;
      empty($instance['address_one']) ? $addressone = '2240 Encinitas Blvd' : null;

      // address two
      isset($instance['address_two']) ? $addresstwo = $instance['address_two'] : null;
      empty($instance['address_two']) ? $addresstwo = 'Suite D467' : null;

      // city
      isset($instance['city']) ? $city = $instance['city'] : null;
      empty($instance['city']) ? $city = 'Encinitas' : null;

      // state
      isset($instance['state']) ? $state = $instance['state'] : null;
      empty($instance['state']) ? $state = 'CA' : null;

      // zip
      isset($instance['zip']) ? $zip = $instance['zip'] : null;
      empty($instance['zip']) ? $zip = '92024' : null;

      // facebook link
      isset($instance['fb_link']) ? $fblink = $instance['fb_link'] : null;
      empty($instance['fb_link']) ? $fblink = 'http://www.facebook.com/AvasAngelsSanDiego' : null;

      // facebook link text
      isset($instance['fb_linktext']) ? $fblinktext = $instance['fb_linktext'] : null;
      empty($instance['fb_linktext']) ? $fblinktext = 'Connect with us on Facebook' : null;

      ?>

      <p>
      <label for="<?php echo $this->get_field_id('address_one'); ?>"><?php _e('Address One:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('address_one'); ?>" name="<?php echo $this->get_field_name('address_one'); ?>" type="text" value="<?php echo esc_attr($addressone); ?>">
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('address_two'); ?>"><?php _e('Address Two:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('address_two'); ?>" name="<?php echo $this->get_field_name('address_two'); ?>" type="text" value="<?php echo esc_attr($addresstwo); ?>">
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo esc_attr($city); ?>">
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('state'); ?>"><?php _e('State:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('state'); ?>" name="<?php echo $this->get_field_name('state'); ?>" type="text" value="<?php echo esc_attr($state); ?>">
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('zip'); ?>"><?php _e('ZIP Code:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('zip'); ?>" name="<?php echo $this->get_field_name('zip'); ?>" type="text" value="<?php echo esc_attr($zip); ?>">
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('fb_link'); ?>"><?php _e('Facebook Link:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('fb_link'); ?>" name="<?php echo $this->get_field_name('fb_link'); ?>" type="text" value="<?php echo esc_attr($fblink); ?>">
      </p>

      <p>
      <label for="<?php echo $this->get_field_id('fb_linktext'); ?>"><?php _e('Facebook Link Text:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('fb_linktext'); ?>" name="<?php echo $this->get_field_name('fb_linktext'); ?>" type="text" value="<?php echo esc_attr($fblinktext); ?>">
      </p>

      <?php
   }

   public function update($new_instance, $old_instance) {

      $instance = array();
      $instance['address_one'] = (!empty($new_instance['address_one']) ) ? strip_tags($new_instance['address_one']) : '';
      $instance['address_two'] = (!empty($new_instance['address_two']) ) ? strip_tags($new_instance['address_two']) : '';
      $instance['city'] = (!empty($new_instance['city']) ) ? strip_tags($new_instance['city']) : '';
      $instance['state'] = (!empty($new_instance['state']) ) ? strip_tags($new_instance['state']) : '';
      $instance['zip'] = (!empty($new_instance['zip']) ) ? strip_tags($new_instance['zip']) : '';
      $instance['fb_link'] = (!empty($new_instance['fb_link']) ) ? strip_tags($new_instance['fb_link']) : '';
      $instance['fb_linktext'] = (!empty($new_instance['fb_linktext']) ) ? strip_tags($new_instance['fb_linktext']) : '';
      return $instance;

   }

   // Create widget front-end
   public function widget( $args, $instance ) {

      $addressone = apply_filters( 'widget_address_one', $instance['address_one'] );
      $addresstwo = apply_filters( 'widget_address_two', $instance['address_two'] );
      $city = apply_filters( 'widget_city', $instance['city'] );
      $state = apply_filters( 'widget_address_two', $instance['state'] );
      $zip = apply_filters( 'widget_state', $instance['zip'] );
      $fb_link = apply_filters( 'widget_fb_link', $instance['fb_link'] );
      $fb_linktext = apply_filters( 'widget_fb_linktext', $instance['fb_linktext'] );

      echo __( '<p>' );
      echo __( $addressone );
      echo __( '<br>' );
      echo __( $addresstwo );
      echo __( '<br>' );
      echo __( $city.', '.$state.' '.$zip );
      echo __( '</p>' );
      echo __( '<p><a href="'.$fb_link.'" target="_blank">'.$fb_linktext.'</a></p>' );
      echo $args['after_widget'];

   }

}//class avacontact_widget extends WP_Widget

// Register and load the widget
function avacontact_load_widget() {
   register_widget('avacontact_widget');
}
add_action('widgets_init', 'avacontact_load_widget');
