
// perform JavaScript after the document is scriptable.
$(function() {
    // setup ul.tabs to work as tabs for each div directly under div.panes
    $(".content .contentRight ul a li.tabs").tabs(".content .contentRight div.panel");
    
});

//$(function() {		
//		
//	// initialize scrollable with mousewheel support
//	$(".scrollable").scrollable({ vertical: true, mousewheel: true });	
//	
//});

$(document).ready(function(){
    $("#scrollbar5 .viewport span pre").click(function(){
        $("#scrollbar5 .viewport p").css({
            "height":"auto"
        });
    });
    $("#scrollbar5 .viewport span pre").dblclick(function(){
        $("#scrollbar5 .viewport p").css({
            "height":"190px"
        });
    });
});

//----------------------------tabs-------------------------------
$(document).ready(function(){
    $(".content .contentRight ul.tabs li:eq(0)").click(function(){
        $(this).css({
            "background-color":"rgb(0,102,51)",
            "border-top-left-radius":"20px",
            "border-bottom-left-radius":"20px"
        });
        $(".content .contentRight ul.tabs li:eq(1)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(2)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(3)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(4)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $("#scrollbar1").css({"display":"block"});
        $("#scrollbar2,#scrollbar3,#scrollbar4,#scrollbar5").css({"display":"none"});
    });
    
});

$(document).ready(function(){
    $(".content .contentRight ul.tabs li:eq(1)").click(function(){
        $(this).css({
            "background-color":"rgb(0,102,51)",
            "border-top-left-radius":"20px",
            "border-bottom-left-radius":"20px"
        });
        $(".content .contentRight ul.tabs li:eq(0)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(2)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(3)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(4)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $("#scrollbar2").css({"display":"block"});
        $("#scrollbar1,#scrollbar3,#scrollbar4,#scrollbar5").css({"display":"none"});
    });
    
});

$(document).ready(function(){
    $(".content .contentRight ul.tabs li:eq(2)").click(function(){
        $(this).css({
            "background-color":"rgb(0,102,51)",
            "border-top-left-radius":"20px",
            "border-bottom-left-radius":"20px"
        });
        $(".content .contentRight ul.tabs li:eq(1)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(0)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(3)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(4)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $("#scrollbar3").css({"display":"block"});
        $("#scrollbar1,#scrollbar2,#scrollbar4,#scrollbar5").css({"display":"none"});
    });
    
});

$(document).ready(function(){
    $(".content .contentRight ul.tabs li:eq(3)").click(function(){
        $(this).css({
            "background-color":"rgb(0,102,51)",
            "border-top-left-radius":"20px",
            "border-bottom-left-radius":"20px"
        });
        $(".content .contentRight ul.tabs li:eq(1)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(2)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(0)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(4)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $("#scrollbar4").css({"display":"block"});
        $("#scrollbar1,#scrollbar2,#scrollbar3,#scrollbar5").css({"display":"none"});
    });
    
});

$(document).ready(function(){
    $(".content .contentRight ul.tabs li:eq(4)").click(function(){
        $(this).css({
            "background-color":"rgb(0,102,51)",
            "border-top-left-radius":"20px",
            "border-bottom-left-radius":"20px"
        });
        $(".content .contentRight ul.tabs li:eq(1)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(2)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(3)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $(".content .contentRight ul.tabs li:eq(0)").css({
            "background-color":"rgb(0,153,0)",
            "border-top-left-radius":"0px",
            "border-bottom-left-radius":"0px"
        });
        $("#scrollbar5").css({"display":"block"});
        $("#scrollbar1,#scrollbar2,#scrollbar3,#scrollbar4").css({"display":"none"});
    });
    
});

//$(document).ready(function(){
//    
//    });



//---------------------------scroll---------------------------------------

//$(function() {		
//		
//    // initialize scrollable with mousewheel support
//    $(".content .contentRight .panel .scrollable").scrollable({
//        vertical: true, 
//        mousewheel: true
//    });	
//	
//});

//$(function() {		
//		
//    // initialize scrollable with mousewheel support
//    $(".content .contentRight .panel .scrollable2").scrollable({
//        vertical: true, 
//        mousewheel: true
//    });	
//	
//});


//$(document).ready(function(){
//    $("scrollable").mouseover(function(){
//        
//    });
//});
