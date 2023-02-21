addEventListener("load", function () {
    // start of profile page image picker
    let imgSelector = document.querySelector(".img-dash");
    let imgInputFile = document.querySelector("#formFile");
    let avatar = document.querySelector(".img-profile");
    imgSelector.addEventListener("click", function () {
        imgInputFile.click();
    });
    document
        .querySelector('input[type="file"]')
        .addEventListener("change", function () {
            if (this.files && this.files[0]) {
                avatar.src = URL.createObjectURL(this.files[0]); // set src to file url
            }
        }); // end of profile page image picker
    // start of register page show password
    $(".togglePassword").click(function (e) {
        // toggle the type attribute
        let inputPassword = $(e.target)
            .closest(".input-box")
            .find(".id_password");
        const type =
            inputPassword.attr("type") === "password" ? "text" : "password";
        inputPassword.attr("type", type);
        e.target.classList.toggle("fa-eye");
    });
}); //load
