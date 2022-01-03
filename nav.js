var settingsmenu = document.querySelector(".settings-menu");



function settingsMenuToggle(){
    settingsmenu.classList.toggle("settings-menu-height");
}




    $('#login-btn').click(function () {
        //set the timeout to load url starts
        setTimeout(function () {
            Notiflix.Report.Info(
                'Usage Info',
                '"Sorry, this option will be available for use in the next version" <br/><br/> - Admin',
                'Okay',
                {
                    svgSize: '42px',
                    messageMaxLength: 1923,
                    plainText: false,
                }
            );
        }, 300);
        //set the timeout to load url ends
        return false;
    });
    
    

/*
$('#login-btn').click(function () {
    //set the timeout to load url starts
    setTimeout(function () {
        window.location = 'http://localhost/nccf/login.php';
    }, 300);
    //set the timeout to load url ends
    return false;
});

*/