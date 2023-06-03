$(".header-signup").hide()
$(".footer-signup").hide()
$("#formSignup").hide()


$("#reg").click(function(){
    
    $(".header-login").hide()
    $(".footer-login").hide()
    $("#formLogin").hide()
    $("#login").removeClass("login")
    $("#login").removeClass("login-forward")
    $("#login").addClass("login-behind")
    $("#signup").removeClass("signup")
    $("#signup").removeClass("signup-behind")
    $("#signup").addClass("signup-forward")
    $(".header-signup").show()
    $(".footer-signup").show()
    $("#formSignup").show()

})

$("#ing").click(function(){
    
    $(".header-login").show()
    $(".footer-login").show()
    $("#formLogin").show()
    $("#login").removeClass("login-behind")
    $("#login").addClass("login-forward")
    $("#signup").removeClass("signup-forward")
    $("#signup").addClass("signup-behind")
    $(".header-signup").hide()
    $(".footer-signup").hide()
    $("#formSignup").hide()

})