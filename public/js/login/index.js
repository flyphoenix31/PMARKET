$(document).ready(function () {
    $("#togglePassword").on('click', function() {
        var user_password = $("#password");
        if(user_password.attr('type') === 'password')
            user_password.attr('type', 'text');
        else
            user_password.attr('type', 'password');
    })

    $("#loginForm").submit(function (e) {
        e.preventDefault();
        const params = {
            email: $("#user_login").val(),
            password: $("#password").val()
        }
        console.log(params);
        axios.post(this.action, params).then(({ data: response }) => {
            console.log(response)
            if (response.status == 0) {
                return window.location.href = "/";
            }
            if (response.error?.summary) {
                $("#errorToast").removeClass("d-none");
                $("#errorToast").html(response.error?.summary);
            } else {
                $("#errorToast").addClass("d-none");
            }

            $("#email_error").html(response.error?.email??"");
            $("#password_error").html(response.error?.password??"");
        }).catch(err => {
            console.error(err);
        })
    })
})