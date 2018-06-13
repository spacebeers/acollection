jQuery(document).ready(function () {
    var $window = jQuery(window);
    var $basket = jQuery("#basket");
    var key = "A_COLLECTION_BASKET";
    var start = [{ quantity: 0 }];

    var ACollection = {
        key: key,

        init() {
            ACollection.updateBasket();
        },

        updateBasket: function () {
            var count = ACollection.getBasket();
            if (count.quantity === 0 || count === 0) {
                $basket.find('.badge')
                    .addClass("hidden")
                    .html(count);
            } else {
                $basket.find('.badge')
                    .removeClass("hidden")
                    .html(count);
            }
        },

        getBasket: function () {
            var store = Cookies.get(ACollection.key) || JSON.stringify(start);
            var resp = JSON.parse(store);
            if (resp == 1) {
                resp = start;
            }
            return resp.reduce(function (acc, val) {
                return parseInt(acc.quantity || 0) + parseInt(val.quantity);
            }, { quantity: 0 }) || 0;
        },

        deleteItem: function (id) {
            var store = Cookies.get(ACollection.key) || JSON.stringify(start);
            var resp = JSON.parse(store);
            if (resp == 1) {
                resp = start;
            }
            var response = [];
            response = resp.filter(function (item) {
                return item.id != id;
            });
            var formatted = JSON.stringify(response);
            Cookies.set(ACollection.key, formatted, { expires: 3 });
            ACollection.updateBasket();
        }
    };

    ACollection.init();

    // Saving the items in local storage
    jQuery('#stock-form').on("submit", function (e) {
        e.preventDefault();
        $this = jQuery(this);
        var quantity = $this.find('select').val();
        var id = jQuery("#productID").val();
        var product = {
            id: id,
            quantity: quantity
        }

        var result = Cookies.get(ACollection.key) || "[]";
        var basket = JSON.parse(result);
        if (basket == 1) {
            basket = start;
        }
        var response = [];
        response = basket.filter(function(item) {
            return item.id != id;
        });
        response.push(product);
        var formatted = JSON.stringify(response);
        Cookies.set(ACollection.key, formatted, { expires: 3 });
        ACollection.updateBasket();
    });

    jQuery('.jsDelete').on('click', function(e) {
        e.preventDefault();
        var $this = jQuery(this);
        ACollection.deleteItem($this.attr('data-id'));
        $this.closest('.basket-item').remove();
        console.log($this.attr('data-id'));
    })

    jQuery("#nav-toogle").click(function () {
        jQuery("#mobile-menu").fadeToggle(200);
        jQuery(this).toggleClass('btn-close');
        jQuery('body').toggleClass('menu-open');
    });

    jQuery.validate({
        form: '#enquiries_form'
    });
});