"use strict";

fetch("/wordpress/index.php/wp-json/api/v1/calculator").then(function(response) {
    return response.text();
}).then(function(data) {
    var scriptName = window.SCRIPT_PATH || "/wordpress/assets/js/numeral.min.js", selector = window.CALCULATOR_SELECTOR || "", element = document.querySelector(selector), script = document.createElement("script");
    script.src = scriptName;
    script.type = "text/javascript";
    if (!element) {
        return;
    }
    element.innerHTML = data;
    document.body.appendChild(script);
    setTimeout(function() {
        $("#sheet").calx();
    }, 500);
});