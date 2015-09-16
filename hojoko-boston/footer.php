        <footer id="footer">    
            <ul id="webticker" class="newsticker">
            <!-- need to modularize these values -->
            <?php for( $i=0; $i<10; $i++ ) : ?>
                <li>PHONE: 617.670.0507</li>
                <li>OPEN 5PM TO 2AM - 7 DAYS A WEEK</li>
                <li><a href="https://www.google.ch/maps/place/1271+Boylston+St,+Boston,+MA+02215,+USA/@42.3454318,-71.0969735,17z/data=!3m1!4b1!4m2!3m1!1s0x89e37a1df0ad8165:0xfd4b82b796b80a06?hl=en" target="_blank">1271 boylston street boston ma 02215</a></li>
            <?php endfor; ?>
            </ul>
        </footer>        

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>-->
        <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/js/vendor/jquery-1.11.3.min.js"></script>
        <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/js/plugins.js"></script>
        <script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59365019-3', 'auto');
  ga('send', 'pageview');
	</script>
        <?php wp_footer(); ?>
    </body>
</html>