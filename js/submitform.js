let form = document.querySelector("form");
form.addEventListener("submit",(e)=>{
    let invis = document.querySelector("#invis");
    let btn = document.querySelector("button");

    btn.style.display="none";
    invis.style.visibility="visible";
    setTimeout(function () {
        window.location.href = "./successful.php";
    }, 5000);
});