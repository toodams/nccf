$(document).ready(function () {
         
    
    $('#section232').waypoint(function (direction) {
        if (direction == 'down'){
            $.load_sermon();
           // $('#section232').addClass('text-animate');
            console.log('hit');
            this.destroy();
        } else {

        }
        
    }, { offset: '50%' });
    
});
