fetch("/wp-json/api/v1/calculator")
    .then(response => response.text())
    .then(data => {
        const scriptName = window.SCRIPT_PATH || "/wordpress/assets/js/numeral.min.js",
            selector = window.CALCULATOR_SELECTOR || "",
            element = document.querySelector(selector),
            script  = document.createElement('script');

        script.src = scriptName;
        script.type = 'text/javascript';

        console.log(data);

        
        if (!element) {
            return;
        }
        element.innerHTML = data;
        document.body.appendChild(script);
    })   