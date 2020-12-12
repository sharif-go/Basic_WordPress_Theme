<div class="sidebar">
            <div class="block">
            <?php if(is_active_sidebar( 'sidebar' )): ?>
    <?php dynamic_sidebar('sidebar');?>


<?php endif; ?>
             <a href="#" class="button">More</a>
            </div>
        </div>
</div>

<?php wp_footer(); ?>
<footer class="main-footer">
        <div class="container">
              <div class="f_left">
                <p>&copy; 2020-<?php bloginfo('name'); ?></p>
              </div>
              <div class="f_right">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Plans</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About</a></li>
                    </ul>
              </div>
        </div>
</footer>
</body>
</html>