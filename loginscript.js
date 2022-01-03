const signupbox = document.querySelector(".signupnow");
const loginbox = document.querySelector(".loginbox");

const signupbtn = document.querySelector(".signup-btn");
const xbtn = document.querySelector(".x-btn");
const bgmodal = document.querySelector(".bgmodal");



signupbtn.addEventListener("click", () => {
    bgmodal.classList.add("show");
    loginbox.classList.add("displaybox");
    signupbox.classList.add("display");

});


xbtn.addEventListener("click", () => {
    bgmodal.classList.remove("show");
    signupbox.classList.remove("display");
    loginbox.classList.remove("displaybox");
}); 





/* Show image on complete load
* Also, give it that cool fade in effect.
* The function :
	- Shows the image Normally, fullscren.
	- Its then blurs the image
	- Loads the login form
	- loads the signup form after a small delay
*/


var img = new Image();
var image_path = 'image/college_1.jpg';

img.onload = function(){
      // image  has been loaded
      $("#background").hide();
      $("#background").css("background-image","url('"+image_path+"')");
      $('#background').fadeIn(1000,"swing");
      setTimeout(function(){
      		$('#background').addClass('background-image-blur');
      		setTimeout(function(){
      		$('#main-tood').fadeTo(400,1);

      		},1000);

      },3000);
};
img.src = image_path;
