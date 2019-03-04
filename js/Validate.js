function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
if(!isMobileDevice()) {
    var interval = window.setInterval(function () {
        let select = document.getElementById('idCas');
        let options = select.children;
        if (options.length == 0) {
            select.hidden = true;
            select.parentNode.innerHTML = "<strong>Žádný čas už není dostupný, zavolejte si do školy pro více informací.</strong>";
            document.querySelector("button").hidden = true;

        }
        else {
            for (let i = 0; i < options.length; i++) {
                $.post("admin/getFreePlace.php", {id: options[i].value})
                    .done(function (data) {
                        if (data == 0) {
                            if (options[i].selected == true) {
                                document.getElementById("zprava").innerHTML = "<strong style='color: orange;'>Vámi vybraný termín byl změněn protože v zadaném termínu již nebyla žádná volná místa</strong>";
                            }
                            options[i].parentNode.removeChild(options[i]);

                        }
                        else {
                            let html = options[i].innerHTML.split(/[0-9]+$/);
                            options[i].innerHTML = html[0] + data.toString();
                        }

                    });
            }
        }

    }, 1000);
}

function CheckTime() {

    clearInterval(interval);
}

