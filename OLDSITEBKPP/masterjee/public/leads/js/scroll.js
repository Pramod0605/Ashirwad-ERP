jQuery(window).on('scroll', function() {
      // Header Sticky JS
      if (jQuery(this).scrollTop() >150){  
         jQuery('.nav-links-area').addClass("is-sticky");
      }
      else{
         jQuery('.nav-links-area').removeClass("lms_is-sticky");
      };

      // Go To Top JS
      var scrolled = jQuery(window).scrollTop();
      if (scrolled > 300) jQuery('.lms_go-top').addClass('lms_active');
      if (scrolled < 300) jQuery('.lms_go-top').removeClass('lms_active');
   });
   jQuery('.lms_go-top').on('click', function() {
      jQuery("html, body").animate({ scrollTop: "0" }, 50);
   });   

     lms_myButton.addEventListener(
                "click",
                function () {
                    lms_myPopup.classList.add("lms_show");
                }
            );
            lms_closePopup.addEventListener(
                "click",
                function () {
                    lms_myPopup.classList.remove(
                        "lms_show"
                    );
                }
            );
            window.addEventListener(
                "click",
                function (event) {
                    if (event.target == lms_myPopup) {
                        lms_myPopup.classList.remove(
                            "lms_show"
                        );
                    }
                }
            );



              lms_myButton1.addEventListener(
                "click",
                function () {
                    lms_myPopup1.classList.add("lms_show");
                }
            );
            lms_closePopup1.addEventListener(
                "click",
                function () {
                    lms_myPopup1.classList.remove(
                        "lms_show"
                    );
                }
            );
            window.addEventListener(
                "click",
                function (event) {
                    if (event.target == lms_myPopup1) {
                        lms_myPopup1.classList.remove(
                            "lms_show"
                        );
                    }
                }
            );