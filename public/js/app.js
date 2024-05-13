document.addEventListener("DOMContentLoaded",()=>{
    console.log("Loaded")
    const el_footer = document.querySelector("p")
    //console.log(el_footer.innerText)
    sessionStorage.setItem("footer",el_footer.innerText);
    //sessionStorage.setItem = el_footer.innerText
})  