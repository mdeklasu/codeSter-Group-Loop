<?php

/*Shortcode*/
function topPickBox_shotcode($atts){
    ob_start();
    extract(
        shortcode_atts( array(
            'title' => '',
            'btn_txt' => '',
            'btn_url' => '',
            'img_url' => '',
            'background_img_url' =>'',
        ), $atts )
    );
?>
<div class="homePage__right__1">
            <div class="rightContent__etsyGifts margin__top">
              <div class="etsyGifts__title margin__left margin__top">
                <h3><?php echo $title ?></h3>
              </div>
              <div class="etsyGifts__textContent">
                <a href="<?php echo $btn_url ?>" class="btn"><button><?php echo $btn_txt ?></button></a>
                <div class="etsyGifts__Content">
                  <div style="background: url('<?php echo get_template_directory_uri()?><?php echo $background_img_url ?>') no-repeat center center/cover;" class="etsyGifts__imgContent estyGifts__amazon"></div>
                  <img class="etsy__textContent" src="<?php echo get_template_directory_uri()?><?php echo $img_url ?>" alt="Etsy Logo Image"/>
                </div>
              </div>
            </div>
</div>

<?php
    return ob_get_clean();
}

add_shortcode('TopicBox', "topPickBox_shotcode");

//[TopicBox title="Amazon - Best website to buy unique & personalized gifts" btn_txt="Try Etsy" btn_url="#" img_url="/Images/etsy.png" background_img_url="/Images/amazon.svg"]


function articlebox_shotcode($atts){
    ob_start();
    extract(
		shortcode_atts( array(
				'title'   	 => '',
				'name'	 	 => '',
				'desc'	 	 => '',
				'btn_txt' 	 => '',
				'btn_title'	 =>'',
				'btn_url'	 => '',
				'img_url'	 => '',
			), $atts )
		);
?>
<div class="homePage__right__1">
            <!-- Gift Crypto Author  -->
            <div class="giftCrypto__author">
              <img
                src="<?php echo $img_url ?>"
                alt="Gift Crypto Images"
                class="giftCrypto__authorImg"
              />
              <div class="giftCrypto__authorContent">
                <h4><?php echo $title ?></h4>
                <h1><?php echo $name ?></h1>
                <p>
                  <?php echo $name ?>
                </p>
                <div class="giftCrypto__mediaIcons">
                  <i class="fa-solid fa-house giftCrypto__icons"></i>
                  <i class="fa-brands fa-twitter giftCrypto__icons"></i>
                  <i class="fa-brands fa-linkedin-in giftCrypto__icons"></i>
                </div>
                <p><?php echo $btn_title ?><a href="<?php echo $btn_url ?>"><?php echo $btn_txt ?></a></p>
              </div>
            </div>
            <!-- End of Gift Crypto Author  -->
</div>
<?php
    return ob_get_clean();
}
add_shortcode('ArticleBox', "articlebox_shotcode");

/*
 [ArticleBox title="Article by" name="Tim Soulo" desc="Tim is the CMO at Ahrefs. But most importantly he’s the biggest fanboy and teh truest evangelist of the company." btn_title="Like our content? " btn_txt="Come write for us" btn_url="#" img_url="/Images/about-1.png"]
*/