$(document).ready(function(){
    $('#logout').click(function(){
        window.location.replace("http://localhost/rajgraphic/admin/logout.php");
    });
    
    $('#users').click(function(){
        alert("hello");
        $('#main_loading_page').load("rajgraphic/admin/../user_settings.php");
    });
    
   