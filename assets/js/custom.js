$(document).ready(function() {
    $("#user-menu").click(function() {
        $("#user-dropdown").fadeToggle(150);
        $("#lang-dropdown").hide();
    });
    
    $("#selected-lang").click(function() {
        $("#lang-dropdown").fadeToggle(150);
        $("#user-dropdown").hide();
    });
});