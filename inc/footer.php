<!-- FOOTER -->  

            <img class="divider" data-interchange="[img/gradient_line.png, (small)], [img/gradient_line.png, (medium)][img/gradient_line.png, (large)]">

             <div class="row small-12 columns small-centered main_paragraph">
                
                <div id="talkbubble">
                    <p>My services are covered by most extended health benefit plans and some sliding scale options are available based on financial need. Please contact me to find out more.</p>
                </div> 

            </div>   


            <div class="large-12 columns footer">
                <p>Kristen Hodges Therapy</p><p>(647)269-3436</p><p>therapy@kristenhodges.com</p>
            </div>

        </div> <!-- End of Container -->

    </div> <!-- End of wrapper -->

    <!-- SCRIPTS -->
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script type="text/javascript">
    $('#cssmenu').prepend('<div id="menu-button">Menu</div>');
    $('#cssmenu #menu-button').on('click', function(){
        var menu = $(this).next('ul');
        if (menu.hasClass('open')) {
            menu.removeClass('open');
        }
        else {
            menu.addClass('open');
        }
    });</script>
  </body>
</html>