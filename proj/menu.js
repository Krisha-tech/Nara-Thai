$(document).ready(function () {
    $('.closeButton').on("click", function () {
        $(this).closest("div").find(".menu-row").fadeToggle();
        var $this = $(this).closest("div").find(".menu-row");
        $this.toggleClass('.menu-row');
        if ($this.hasClass('.menu-row')) {
            $(this).text('See Items');
        } else {
            $(this).text('Hide Items');
        }
    });
    $('#cart').toggle();

    $('.cart-btn').on("click", function () { 
        var $this = $("#cart");
        $this.toggleClass('.cart-section');
        if ($this.hasClass('.cart-section')) {
            localStorage.setItem('cart', 'hide');
            $this.slideUp('slow');
        }else{
            $this.slideDown('slow');
            localStorage.setItem('cart', 'show');
        }
    });


    $('.showHideCategoryDropDown').on("click", function () {
        var $this = $("#categoryDropDown");
        $this.toggleClass('.categoryDropDown');
        if ($this.hasClass('.categoryDropDown')) { 
            $this.slideUp('slow');
        } else {
            $this.slideDown('slow'); 
        }
    });

    $("#update").click(function (id,total,qty,func) { 
        $.ajax({
            url: './logic/updateCartValue.php',
            method: 'POST',
            data: {
                id: id,
                itemQty: ctgr,
                itemPrice: total,
                funtion: func
            },
            success: function (response) {
                alert(response);
            }
        });
    });
}); 

$(document).ready(
    function () {
        if(localStorage.getItem('cart') == 'hide'){
            $("#cart").hide();
        }else{
            $("#cart").show();
        }
    }
);  

window.onbeforeunload = function () {
    if (localStorage.getItem('cart') == 'show') { 
        localStorage.setItem('cart', 'hide');
    }
};

$(document).ready(function () {
    // ... (your existing code)

    // Add the following code to handle the click event for the Checkout button
    $('.btn').on("click", function () {
        // Redirect to the desired page
        window.location.href = 'delivery details.php';
    });
    
    // ... (rest of your existing code)
});
