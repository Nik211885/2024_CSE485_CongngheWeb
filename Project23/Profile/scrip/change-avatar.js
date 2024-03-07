const boxAvtar = document.querySelector("#avatar-lb")
const inputFileAvtar = document.querySelector("#inputGroupFile02")
inputFileAvtar.addEventListener('change',(event)=>{
    const file = event.target.files[0];
    if(file){
        boxAvtar.removeAttribute('src');
        boxAvtar.setAttribute("src",window.URL.createObjectURL(file));
        console.log("a");
    }
})