/* =========================
   LOADER
========================= */
window.addEventListener("load",()=>{
setTimeout(()=>{
const loader =
document.getElementById("loader");
loader.style.opacity = "0";
setTimeout(()=>{
loader.style.display = "none";
},800);
},1000);
});
/* =========================
   NAVBAR SCROLL EFFECT
========================= */
const navbar =
document.querySelector(".navbar");
window.addEventListener("scroll",()=>{
if(window.scrollY > 50){
navbar.style.background =
"rgba(0,0,0,.75)";
navbar.style.backdropFilter =
"blur(25px)";
navbar.style.borderBottom =
"1px solid rgba(255,255,255,.08)";
}else{
navbar.style.background =
"rgba(0,0,0,.55)";
navbar.style.backdropFilter =
"blur(20px)";
navbar.style.borderBottom =
"1px solid rgba(255,255,255,.05)";
}
});
/* =========================
   REVEAL ANIMATION
========================= */
const observer =
new IntersectionObserver((entries)=>{
entries.forEach((entry)=>{
if(entry.isIntersecting){
entry.target.classList.add("show");
}
});
},{
threshold:0.15
});
document.querySelectorAll(
".section,.job-card,.stat-card,.process-card,.company-card,.dashboard-card"
).forEach((el)=>{
el.classList.add("hidden");
observer.observe(el);
});
/* =========================
   BUTTON HOVER SCALE
========================= */
document.querySelectorAll(
"button,.primary-btn,.secondary-btn,.nav-btn"
).forEach((btn)=>{
btn.addEventListener("mouseenter",()=>{
btn.style.transform =
"scale(1.05)";
});
btn.addEventListener("mouseleave",()=>{
btn.style.transform =
"scale(1)";
});
});
/* =========================
   HERO FLOAT EFFECT
========================= */
const cards =
document.querySelectorAll(
".dashboard-card"
);
let angle = 0;
function floatCards(){
angle += 0.01;
cards.forEach((card,index)=>{
const y =
Math.sin(angle + index)
* 5;
card.style.transform =
`translateY(${y}px)`;
});
requestAnimationFrame(
floatCards
);
}
floatCards();
/* =========================
   SEARCH BUTTON EFFECT
========================= */
const searchBtn =
document.querySelector(
".search-box button"
);
if(searchBtn){
searchBtn.addEventListener(
"click",
()=>{
searchBtn.textContent =
"Searching...";
setTimeout(()=>{
searchBtn.textContent =
"Search Jobs";
},1500);
}
);
}
/* =========================
   SMOOTH ACTIVE LINK
========================= */
const sections =
document.querySelectorAll("section");
const navLinks =
document.querySelectorAll(
".nav-links a"
);
window.addEventListener(
"scroll",
()=>{
let current = "";
sections.forEach(
(section)=>{
const sectionTop =
section.offsetTop - 200;
if(window.scrollY >= sectionTop){
current = section.id;
}
}
);
navLinks.forEach(
(link)=>{
link.style.color =
"#a5a5a5";
if(
link.getAttribute("href")
=== "#" + current
){
link.style.color =
"#ffffff";
}
}
);
}
);
/* =========================
   STATS COUNTER
========================= */
const statNumbers =
document.querySelectorAll(
".stat-card h2"
);
statNumbers.forEach((stat)=>{
const original =
stat.innerText;
stat.dataset.value =
original;
});
/* =========================
   PAGE READY
========================= */
console.log(
"HireFlow Premium Loaded"
);
const glow =
document.querySelector(".cursor-glow");

document.addEventListener("mousemove",(e)=>{

glow.style.left =
e.clientX - 150 + "px";

glow.style.top =
e.clientY - 150 + "px";

});
