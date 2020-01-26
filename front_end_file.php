<?php

function func_wp_insert()
{
    //Add Vue.js
    wp_enqueue_script('wp_vuejs_n');
    //Add my code to it
    wp_enqueue_script('my_vuecode_n');


    wp_enqueue_style('wp_bulma_css_style');
    wp_enqueue_style('wp_style_n');


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

                  <img src="https://www.ic-myron.com/cf/HybrisProd/ConfigExpress/PreviewImageCalc/StreamView.cfm?comp=AU&qsn=K12009788&itemno=WF98803A&AreaPhyG=PBF&FontID=MYRONDR&logo=&impline1=.&impline2=&impline3=&AutoCalculateFontSizeForPreview=Y" style="width:100%;">
                </div>
              </modal>

              <button @click="showModal=true">Preview</button>
          </preview>
    '
    .'</div>';
}


add_action('woocommerce_before_add_to_cart_form', 'func_wp_insert');
