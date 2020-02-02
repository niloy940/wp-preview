<?php

function func_wp_insert()
{
    //Add Vue.js
    wp_enqueue_script('wp_vuejs_n');
    //Add my code to it
    wp_enqueue_script('my_vuecode_n');


    wp_enqueue_style('wp_bulma_css_style');
    wp_enqueue_style('wp_style_n');

    global $product;
    $product_id = $product->get_id();

    if ($product_id == 348) {
        $image_src = 'https://iflash.at/dev/wp-content/uploads/2020/02/preview_image_iflash2.jpg?fbclid=IwAR0RJydRvG8UdYCiXCL1prIhFqigT3Iii4L5w2YPMql8A8iq2zorCH5hkTA" style="width:100%; ';
    } elseif ($product_id == 358) {
        $image_src = 'https://iflash.at/dev/wp-content/uploads/2020/02/preview_image_iflash2.jpg?fbclid=IwAR0RJydRvG8UdYCiXCL1prIhFqigT3Iii4L5w2YPMql8A8iq2zorCH5hkTA" style="width:100%; ';
    } else {
        $image_src = 'https://iflash.at/dev/wp-content/uploads/2020/02/preview_image_iflash2.jpg?fbclid=IwAR0RJydRvG8UdYCiXCL1prIhFqigT3Iii4L5w2YPMql8A8iq2zorCH5hkTA" style="width:100%; ';
    }

    echo "<div id='wp_per_app' class='container wrapper'>"
        .'
          <preview>

              <div class="field">
                <div class="control">
                    <input id="usertext" v-model="usertext" class="input is-primary" type="text" @keyup="typing" placeholder="type here">
                </div>
              </div>

              <modal v-if="showModal" @close="showModal=false">
                <div class="cont">
                  <div id="utext" class="utext">{{ usertext }}</div>

                  <img src="'. $image_src .'">
                </div>
              </modal>

              <button @click="show">Preview</button>
          </preview>
    '
    .'</div>';
}


add_action('woocommerce_before_add_to_cart_form', 'func_wp_insert');
