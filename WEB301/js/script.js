$(document).ready(function() {              
    $("#mobilenav").click(function() {
        $("#mainnav").slideToggle("slow");
    });



});
    
function showLightbox(content) {
    $("#lightboxContent").html(content);
    $("#overlay").slideToggle(1500);	
}
    
$(document).ready(function(){


$("#lightboxBtn").click(function() {
    $("#lightboxContent").html("Liverpool Football Club is a professional football club based in Liverpool, England. The club competes in the Premier League, the top tier of English football. Founded in 1892, the club joined the Football League the following year and has played its home games at Anfield since its formation.Domestically, the club has won 19 League titles, eight FA Cups, a record nine League Cups and 16 FA Community Shields. In international competitions, the club has won six European Cups, three UEFA Cups, four UEFA Super Cups—all English records—and one FIFA Club World Cup.");
    $("#overlay").slideToggle(1500);
});	
		

$("#close").click(function() {
    $("#overlay").fadeOut();
});

$("#overlay").click(function() {
    $("#overlay").fadeOut();
});				




});
