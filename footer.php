    <footer class="footer">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo"><?php bloginfo('name'); ?></a>
            <aside class="sidebar">
        <div class="sidebar-inner">
          <div class="sidebar-block">
            <h3>過去のアーカイブ</h3>
            <ul class="yearly-archive">
              <?php wp_get_archives('type=yearly'); ?>
            </ul>
          </div>
        </div>
      </aside>
      <p class="copyright"><?php echo $_SERVER['HTTP_HOST']; ?> all right reserved.</p>
    </footer>

    <?php wp_footer(); ?>

    <!-- JavaScript -->

      <!-- fontawesome(をいちおういれておく) -->
      <script src="https://kit.fontawesome.com/9ab3ae9094.js" crossorigin="anonymous"></script>

    <!--#JS-->
  </body>
</html>