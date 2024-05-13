document.addEventListener("DOMContentLoaded",()=>{
    console.log("Loaded")
    const footer = document.querySelector("p")
    //console.log(el_footer.innerText)
    //sessionStorage.setItem("footer",el_footer.innerText);
    sessionStorage.footer = footer.innerText
})  