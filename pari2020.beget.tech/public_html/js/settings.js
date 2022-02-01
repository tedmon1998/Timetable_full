
$(window).on('load', general_settings());

function colors(param) {
    document.getElementById('general_settings').style.color = "#000";
    document.getElementById('password_settings').style.color = "#000";
    document.getElementById('mail_settings').style.color = "#000";
    document.getElementById(param).style.color = "#fff";
};

function general_settings() {
    $("#res").load("./general_settings.php");
    colors('general_settings');
};

function password_settings() {
    $("#res").load("./password_settings.php");
    colors('password_settings');
};

function mail_settings() {
    $("#res").load("./mail_settings.php");
    colors('mail_settings');
};
