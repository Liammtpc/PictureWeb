const hampanel=document.querySelector("#hampanel");
const sideBar=document.querySelector(".sideBar");
hampanel.addEventListener('click',()=>{
     sideBar.style.right=0
    sideBar.style.position="static"
    hampanel.style.display="none"
})
sideBar.addEventListener('click',()=>{
    sideBar.style.right="-5000px"
    sideBar.style.position='absolute'
    hampanel.style.display="block"
})