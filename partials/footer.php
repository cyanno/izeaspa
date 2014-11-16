<div id="footer">
    <div style="text-align: center; font-size: 18px;">
        Devenez client <span class="vip">VIP</span> et bénéficiez de tarifs <span class="vip">privilèges</span>. Carte VIP <span class="vip">6</span> mois: 35€, Carte VIP <span class="vip">12</span> mois: 60€.
    </div>
    <span style="width: 310px; float:left;">&copy; <?php print(date(Y)); ?> <a href="<?php echo get_option('home') ?>/"
                                                                               title="<?php bloginfo('name') ?>"
                                                                               rel="home"><?php bloginfo('name'); ?></a>&nbsp;&nbsp;On accepte les cartes cadhoc: </span>

<span style="width: 80px; float:left;">
			<img style="float:left;" src="http://www.izeaspa.com/wp-content/uploads/2011/10/cadhoc.png" width="50"
                 alt="cadhoc"></img>æ
		</span>
<span style="width: 216px; float:left;">
			<object type="application/x-shockwave-flash" data="/wp-content/themes/autofocus/dewplayer/dewplayer.swf"
                    width="180" height="20" id="dewplayer" name="dewplayer">
                <param name="wmode" value="transparent"/>
                <param name="movie" value="dewplayer.swf"/>
                <param name="flashvars"
                       value="mp3=/wp-content/themes/autofocus/dewplayer/mp3/izea.mp3&amp;autoreplay=1&amp;volume=60"/>
            </object>
		</span>

    <?php if (1 == 2) { ?>
        <span style="width: 300px; float:left;">
			<div class="fb-facepile" data-href="https://www.facebook.com/pages/Izea-Spa/158343407592102"
                 data-width="320" data-max-rows="1" data-colorscheme="dark"></div>
		</span>
    <?php } ?>
    <span style="width: 180px; float:left;">
			<div class="fb-like" data-href="https://www.facebook.com/pages/Izea-Spa-wwwizeaspacom/158343407592102"
                 data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"
                 data-action="recommend"></div>
		</span>

</div>

<!-- #footer -->
</div><!-- #wrapper .hfeed -->

<?php wp_footer(); ?>

</body>
</html>