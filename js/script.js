// let searchBtn = document.querySelector('#search-btn');
// let searchBar = document.querySelector('.search-bar-container');
// let menu = document.querySelector('#menu-bar');
// let navbar = document.querySelector('.navbar');
// let vidplaypause = document.querySelector('#video-slider');
// let videoBtn = document.querySelectorAll('.vid-btn');
// let home = document.querySelector('.home');
// let home2 = document.querySelector('.home2');
// let playpauseIcon = document.querySelector(".playpause-icon");
// let picturemodeIcon = document.querySelector(".picturemode-icon");
// let videomodeIcon = document.querySelector(".videomode-icon");

// function videoplaypause(){
//     if(vidplaypause.paused){
//         vidplaypause.play();

//       // Replace icon with the pause icon
//       playpauseIcon.innerHTML = '<ion-icon name="pause-outline" class="active"></ion-icon>';

//     }else{
//         vidplaypause.pause();

//       // Replace icon with the play icon
//       playpauseIcon.innerHTML = '<ion-icon name="play-outline" class="active"></ion-icon>';

//     }
// }

// function picturemode(){
//      // change video if not paused to pause then change mode
//      if(!vidplaypause.paused){
//         vidplaypause.pause();
//       // Replace icon with the play icon
//       playpauseIcon.innerHTML = '<ion-icon name="play-outline" class="active"></ion-icon>';
//     }

//     home.style.display = "none";
//     home2.style.display = "flex";
// }

// function videomode(){
//     home2.style.display = "none";
//     home.style.display = "flex";

//      // change video if paused to play then change mode
//      if(vidplaypause.paused){
//         vidplaypause.play();
//       // Replace icon with the play icon
//       playpauseIcon.innerHTML = '<ion-icon name="pause-outline" class="active"></ion-icon>';
//     }
// }

// window.onscroll = () =>{
//     searchBtn.classList.remove('fa-times');
//     searchBar.classList.remove('active');
//     menu.classList.remove('fa-times');
//     navbar.classList.remove('active');

// }
// /*

// document.addEventListener('scroll',()=>{
//     var scroll_position = window.scrollY;
//     var headerrx = document.querySelector("header");
//     var navb = document.querySelector("header .navbar a");
//     var navbi = document.querySelector("header .icons i");

//     if(scroll_position < 600){
//         headerrx.style.background = "transparent";
//         navb.style.color = "#fff";
//         navbi.style.color = "#fff";
//     }else{
//         headerrx.style.background = "#fff";
//     }
// });

//  */

// menu.addEventListener('click', () =>{
//     menu.classList.toggle('fa-times');
//     navbar.classList.toggle('active');
// });

// searchBtn.addEventListener('click', () =>{
//     searchBtn.classList.toggle('fa-times');
//     searchBar.classList.toggle('active');
// });

// videoBtn.forEach(btn =>{
//     btn.addEventListener('click', ()=>{
//         document.querySelector('.controls .active').classList.remove('active');
//         btn.classList.add('active');
//         let src = btn.getAttribute('data-src');
//         document.querySelector('#video-slider').src = src;

//         // change video if paused to play then change mode
//         if(vidplaypause.paused){
//             vidplaypause.play();
//         // Replace icon with the play icon
//         playpauseIcon.innerHTML = '<ion-icon name="pause-outline" class="active"></ion-icon>';
//         }
//     });
// });

// playpauseIcon.addEventListener('click', () =>{
//     videoplaypause()
// });

// picturemodeIcon.addEventListener('click', () =>{
//     picturemode()

//     if(localStorage.getItem("modeform") == "videomodeform"){
//         localStorage.setItem("modeform", "picturemodeform");
//     }
// });

// videomodeIcon.addEventListener('click', () =>{
//     videomode()

//     if(localStorage.getItem("modeform") == "picturemodeform"){
//         localStorage.setItem("modeform", "videomodeform");
//     }
// });

// if(localStorage.getItem("modeform") == "videomodeform"){
//     videomode()
// }
// else if(localStorage.getItem("modeform") == "picturemodeform"){
//     picturemode()
// }
// else{
//     localStorage.setItem("modeform", "videomodeform");
// }
