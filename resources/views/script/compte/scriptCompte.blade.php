<script>
let loginButton = document.querySelector("#loginButton");
let registerButton = document.querySelector("#registerButton");
let loginDiv = document.querySelector("#loginDiv");
let registerDiv = document.querySelector("#registerDiv");


loginButton.addEventListener("click",function(){
    loginDiv.classList.remove("invisible");
    loginDiv.classList.add("loginDiv");

    loginButton.classList.remove("loginActiveStyle2");
    loginButton.classList.add("loginActiveStyle");


    registerButton.classList.remove("loginActiveStyle");
    registerButton.classList.add("loginActiveStyle2");

    registerDiv.classList.remove("registerDiv");
    registerDiv.classList.add("invisible");

});



registerButton.addEventListener("click",function(){
    loginDiv.classList.remove("loginDiv");
    loginDiv.classList.add("invisible");

    loginButton.classList.remove("loginActiveStyle");
    loginButton.classList.add("loginActiveStyle2");


    registerButton.classList.remove("loginActiveStyle2");
    registerButton.classList.add("loginActiveStyle");

    registerDiv.classList.remove("invisible");
    registerDiv.classList.add("registerDiv");

});
</script>
