const menu2=document.getElementById("menu2");
const closes=document.querySelector("#close");
const opens=document.querySelector("#hambur");
let openMenu=false
opens.addEventListener('click',()=>{
    menu2.style.right=0
    menu2.style.position="sticky"
})
closes.addEventListener('click',()=>{
    menu2.style.right="-5000px"
    menu2.style.position="absolute"
    
})
