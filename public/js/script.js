// sticky navbar
var navbar = document.getElementById("navbar");
var sticky = navbar ? navbar.offsetTop : 0;
function myFunction() {
    if (window.pageYOffset > sticky) {
        navbar.classList.add("sticky");
    } else {
        navbar.classList.remove("sticky");
    }
}

if (navbar) {
    window.onscroll = function () {
        myFunction();
    };
}

$(".submit-details").on("click", function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phoneNum").val();
    var terms = $("#terms:checked").length;
    var sector_id = $("#sector_id").val();
    var whatsApp = $("#whatsApp_alerts:checked").length;
    if (!name) {
        $("#name").focus();
        $("#name").css({ "border-color": "red" });
        return;
    } else {
        $("#name").css({ "border-color": "#dddddd" });
    }

    if (!email) {
        $("#email").focus();
        $("#email").css({ "border-color": "red" });
        return;
    } else {
        $("#email").css({ "border-color": "#dddddd" });
    }

    if (!phone) {
        $("#phoneNum").focus();
        $("#phoneNum").css({ "border-color": "red" });
        return;
    } else {
        $("#phoneNum").css({ "border-color": "#dddddd" });
    }

    if (!terms) {
        alert("Please accept terms and conditions");
        return;
    }

    if (name && email && phone && terms) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            url: "/users",
            type: "POST",
            data: {
                name,
                email,
                phone,
                terms,
                whatsApp,
            },
            success: function (response) {
                if (response.success == true) {
                    // alert("User Added Successfully");
                    $("#userDeatilsForm").trigger("reset");
                    window.location.href = `/start-quiz/${sector_id}`;
                }
            },
        });
    }
});
