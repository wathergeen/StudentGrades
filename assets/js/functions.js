/* Loader animation */
$(window).on("load", function () {
    $(".content-wrapper").hide(),
        $(".loader-wrapper").fadeOut(730),
        $(".content-wrapper").show(1000);
});

/* Search the username on Database */

function searchUser() {
    var user__identity = document.querySelector('input').value;
    if (user__identity !== '') {
        console.log(user__identity);
        $.ajax({
            type: "POST",
            url: "server/checkUser.php",
            contentType: 'application/json; charset=utf-8',
            data: {
                "user__identity": user__identity,
            },
            success: function (data) {
                var data_received = data;
                console.log(data_received.email);
                /*if (user__identity != data) {
                    document.getElementById("status__identity").innerHTML = "Este usuário não existe!";
                    document.getElementById("user__identity").className = document.getElementById("user__identity").className + " error-input"; //Add the red border to input field

                } else {
                    document.getElementById("status__identity").innerHTML = "";
                    document.getElementById("user__identity").className = document.getElementById("user__identity").className.replace(" error-input", "");//Remove the red border of the input field
                }*/
            },
            error: function (xhr, err, e) {
                alert("error");
            }
        });
    }
}