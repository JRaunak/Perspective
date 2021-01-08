function V1() {
    $("#v1").css("display", "none");
    document.getElementById("v1").volume = 0;
    document.getElementById("v2").volume = 1;
    $("#v2").css("display", "inline-block");
}
function V2() {
    $("#v1").css("display", "inline-block");
    document.getElementById("v1").volume = 1;
    document.getElementById("v2").volume = 0;
    $("#v2").css("display", "none");
}
function Toggle(){
    var v1 = document.getElementById("v1");
    var v2 = document.getElementById("v2");
    var control = document.getElementById("control");
    if(run===false){
        v1.play();
        v2.play();
        run = true;
    }
    else if(run===true){
        v1.pause();
        v2.pause();
        run = false;
    }
}
function Like(){

}
function Add_Comment(){
    var commbox = $("#comment_box")
    var Comment = commbox.val()
    if(Comment===""){
        return
    }
    $("#comments").append('<li>'+Comment+'</li>');
    $("#comment_box").val("");
}