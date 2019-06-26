// Set the dot beside the nav item that coincides with the page we're on
var url = document.URL;

var pathname = new URL(url).pathname;
var pageUrl = pathname.split('/');
var page = pageUrl[pageUrl.length - 2].toLowerCase();

switch (page) {
    case "about":
        $( "#about" ).addClass( "active" );
        break;
    case "products":
        $( "#products" ).addClass( "active" );
        break;
    case "gallery":
        $( "#gallery" ).addClass( "active" );
        break;
    case "contact":
        $( "#contact" ).addClass( "active" );
        break;
    default: 
        $( "#home" ).addClass( "active" );

}
