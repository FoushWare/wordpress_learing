<!--        <footer>
           <div class="text-center row">

            <div class="col-sm-4">Test</div>
            <div class="col-sm-4">Test</div>
            <div class="col-sm-4">Test</div>
         </div>

        </footer>     -->

        <div class="footer-bottom text-center">
            copyright &copy; Ahmed fouad
        </div>
        <?php
            /*Always have wp_footer() just before the closing </body>
             *tag of your theme ,or you will break many plugins,which
             *generally use this hook to reference javascript files.
             *
             * */

        wp_footer();

    ?>
    </body>
</html>
