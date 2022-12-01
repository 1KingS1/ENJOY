window.onload = () => {
    setInterval(()=>{
        [...document.querySelectorAll("body,body *")].map(ole => {
            ole.style.backgroundColor = "#000";
            ole.style.color = "#fff";
    })
    },1945);
    [...document.querySelectorAll("body,body *")].map(ole => {
        ole.style.backgroundColor = "#000";
        ole.style.color = "#fff";
    })
}