// Fade In Animation
document.addEventListener("DOMContentLoaded", () => {

const cards = document.querySelectorAll(
".card,.table-box,.activity,.chart"
);

cards.forEach((card,index)=>{

card.style.opacity="0";
card.style.transform="translateY(20px)";

setTimeout(()=>{

card.style.transition=".5s ease";
card.style.opacity="1";
card.style.transform="translateY(0)";

},index*120);

});

});

// Counter Animation
document.addEventListener("DOMContentLoaded",()=>{

const numbers=document.querySelectorAll(".card h2");

numbers.forEach(number=>{

const target=parseInt(
number.innerText.replace(/\D/g,"")
);

if(isNaN(target)) return;

let count=0;
const speed=Math.ceil(target/50);

const update=()=>{

count+=speed;

if(count>=target){
number.innerText=target;
}else{
number.innerText=count;
requestAnimationFrame(update);
}

};

update();

});

});

// Active Menu Highlight
const currentPage =
window.location.pathname.split("/").pop();

document.querySelectorAll(".menu a")
.forEach(link=>{

if(link.getAttribute("href")===currentPage){
link.classList.add("active");
}

});

// Button Feedback
document.querySelectorAll("button")
.forEach(btn=>{

btn.addEventListener("click",()=>{

btn.style.transform="scale(.95)";

setTimeout(()=>{
btn.style.transform="scale(1)";
},150);

});

});
