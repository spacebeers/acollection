jQuery(document).ready(function() {
    var $window = jQuery(window);
    var $gallerymain = jQuery("#galleryMain");
    var $basket = jQuery("#basket");
    var key = "A_COLLECTION_BASKET";
    var start = {
        "0": 0
    }

    var ACollection = {
        key: key,

        init() {
            ACollection.updateBasket();
        },

        updateBasket: function() {
            $basket.html(ACollection.getBasket());
        },

        getBasket: function() {
            var store = localStorage.getItem(ACollection.key) || JSON.stringify(start);
            var obj = JSON.parse(store);
            return Object.values(obj).reduce(function(acc, val) {
                return parseInt(acc) + parseInt(val);
            }) || 0;
        }
    };

    ACollection.init();

    jQuery("#galleryControls a").click(function(e) {
        e.preventDefault();
        var containingImgSrc = jQuery(this)
            .find("img")
            .attr("src");

        $gallerymain
            .fadeOut()
            .attr("src", this.href)
            .fadeIn();
    });

    // Saving the items in local storage
    jQuery('#stock-form').on("submit", function(e) {
        e.preventDefault();
        $this = jQuery(this);
        var quantity = $this.find('select').val();
        var id = jQuery("#productID").val();
        var state = localStorage.getItem(ACollection.key) || "{}";
        var nice = JSON.parse(state);
        nice[id] = quantity;
        localStorage.setItem(key,  JSON.stringify(nice));
        ACollection.updateBasket();
    });
});