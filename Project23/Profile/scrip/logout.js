const logOut = document.querySelector("#logout");
logOut.addEventListener('click',()=>{
    fetch("../logout.php");
    window.location.reload(true);
});