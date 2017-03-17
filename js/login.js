jQuery(document).ready(function() {
  Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
       // init background slide images
       $.backstretch([
        "../../v4.1.0/theme/assets/admin/pages/media/bg/2.jpg",
        "../../v4.1.0/theme/assets/admin/pages/media/bg/1.jpg",
        "../../v4.1.0/theme/assets/admin/pages/media/bg/3.jpg",
        "../../v4.1.0/theme/assets/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
