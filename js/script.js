$(document).ready(function(){
    $(".flowers div").click(function(){
        window.location = "flowers.php"
    })
})


function showNext(current, next){
    $("."+current).hide('slow');
    $("."+next).show('slow');
}


function loadSlide(mySlide){
    slides = ['artificial', 'natural', 'dry', 'others']
    if(mySlide == 'natural'){
        $(".artificial").hide()
        $(".dry").hide()
        $(".others").hide()
        $(".natural").show()
    }
    else if(mySlide == 'artificial'){
        $(".natural").hide()
        $(".dry").hide()
        $(".others").hide()
        $(".artificial").show()
    }
    else if(mySlide == 'dry'){
        $(".artificial").hide()     
        $(".natural").hide()
        $(".others").hide()
        $(".dry").show()
    }
    else{
        $(".artificial").hide()
        $(".natural").hide()
        $(".dry").hide()
        $(".others").show()
    }
}