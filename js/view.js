function redirect() {
    window.location.href = 'view.php';
    console.log('redirected');
}

function closesmazatall() {
    setTimeout(() => {
        let zavritsmazat = document.querySelector("#zavritsmazatall");
        zavritsmazat.click();
    }, 3000);
}

function closesmazat() {
    setTimeout(() => {
        let zavritsmazat = document.querySelector("#zavritsmazat");
        zavritsmazat.click();
    }, 3000);
}

function smazat(e) {
    let id = e.getAttribute("id");
    console.log(id);
    document.querySelector("#smazathidden").value = id;
}

function prijat(e) {
    let id = e.getAttribute('id');
    console.log(id);
    document.querySelector('#prijathidden').value = id;
}

function clearallprijat() {
    setTimeout(function () {
        let uid = document.querySelector("#uidprijat");
        uid.value = "";
        let documentnumber = document.querySelector("#documentnumberacc");
        documentnumber.value = "";
        let zavritprijat = document.querySelector("#zavritprijat");
        zavritprijat.click();

    }, 3000);
}

function edit(e) {
    let id = e.getAttribute('id');

    let datetime = document.getElementById(id).childNodes[0].innerHTML;

    let pocet = document.getElementById(id).childNodes[2].innerHTML;

    console.log(datetime);
    let datetimeresult = moment(datetime, "DD.MM.YYYY HH:mm").format('YYYY-MM-DDTHH:mm');
    console.log(datetimeresult);
    let datetimepicker = document.querySelector("#datetime");
    document.querySelector("#edithidden").value = id;
    datetimepicker.value = datetimeresult;
    console.log(pocet);
    document.querySelector("#pocet").value = pocet;
}

function neprijat(e) {
    let id = e.getAttribute('id');
    console.log(id);
    document.querySelector("#neprijathidden").value = id;
}

function rozhodnutiprijat(e) {
    let id = e.getAttribute('id');
    console.log(id);
    document.querySelector("#rozhodnutiprijathidden").value = id;

}

function clearallrozhodnutiprijat() {
    setTimeout(function () {

        let documentnumber = document.querySelector("#documentnumberrozhodnutiprijat");
        documentnumber.value = "";
        let uid = document.querySelector("#uidrozhodnitiprijat");
        uid.value = "";
        let datum = document.querySelector("#datumpravnimociprijat");
        datum.value = "";
        let zavritneprijat = document.querySelector("#zavritrozhodnutiprijat");
        zavritneprijat.click();
    }, 3000);
}

function rozhodnutineprijat(e) {
    let id = e.getAttribute('id');
    console.log(id);
    document.querySelector("#rozhodnutineprijathidden").value = id;

}

function clearallrozhodnutineprijat() {
    setTimeout(function () {
        let documentnumber = document.querySelector("#documentnumberrozhodnutineprijat");
        documentnumber.value = "";
        let uid = document.querySelector("#uidrozhodnitineprijat");
        uid.value = "";
        let datum = document.querySelector("#datumpravnimocineprijat");
        datum.value = "";
        let zavritneprijat = document.querySelector("#zavritrozhodnutineprijat");
        zavritneprijat.click();
    }, 3000);
}

function clearallneprijat() {
    setTimeout(function () {
        let uid = document.querySelector("#uidneprijat");
        uid.value = "";
        let documentnumber = document.querySelector("#documentnumberdecl");
        documentnumber.value = "";
        let zavritneprijat = document.querySelector("#zavritneprijat");
        zavritneprijat.click();
    }, 3000);
}

function pravo(e) {
    let id = e.getAttribute("id");
    console.log(id);
    document.querySelector("#pravohidden").value = id;
}

function clearallpravo() {
    setTimeout(function () {
        let uid = document.querySelector("#uidpravo");
        uid.value = "";
        let documentnumber = document.querySelector("#documentnumberpravo");
        documentnumber.value = "";
        let zavritneprijat = document.querySelector("#zavritpravo");
        zavritneprijat.click();
    }, 3000);
}