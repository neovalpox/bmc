////////////////
// Connection //
////////////////
var user = window.localStorage.getItem("user");
$.post("http://www.quiestu.ch/apk/php/count_msg.php", {"email": user}, function(msg){
    var nb_msg = msg.new_msg;
    var s = msg.s;
    $('div.nb_new_msg').html(nb_msg);
});