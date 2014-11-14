function getPhoneGapPath() {

    var path = window.location.pathname;
    path = path.substr( path, path.length - 10 );
    return 'file://' + path;

};

var snd = new Media( getPhoneGapPath() + 'sound/beep.wav' );
