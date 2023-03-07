$(document).ready(function() { 
    $(window).resize(function() {
        $('#mobilenav').show()
  })
                 
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

function getLocation() {
    if (navigator.geolocation) {
        console.log("asking for location");
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {	
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;	
    
    var dir_url = "https://www.google.com/maps/place/Stamford+Bridge/@51.482492,-0.191,15z/data=!4m6!3m5!1s0x48760f864b976f3d:0x48aa38781ea565f8!8m2!3d51.481663!4d-0.1909565!16zL20vMDMxNGdi?hl=en-US"   
    
    document.getElementById("directions").innerHTML = "<a href='"+dir_url+"'>GET DIRECTIONS TO CHELSEA STADIUM</a>";    
    
    showMap(position);      
}

function showMap(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
    var zoom = 12;
    
    if (window.innerWidth > 639) {
        zoom = 3;
    } else {
        zoom = 18;
    }
    
    const myCenter = { lat: lat, lng: lon };
    
    var mapProperties = {
        center:myCenter,
        zoom:zoom,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProperties);
    
    var marker = new google.maps.Marker({position: myCenter});
    marker.setMap(map);    
    
    google.maps.event.addDomListener(window, "resize", function() {
        if (window.innerWidth > 639) {
            map.setZoom(12);
        } else {
            map.setZoom(18);
        }         
    });
}





function showError(error) {
    var myDiv = document.getElementById("location");
    switch(error.code) {
        case error.PERMISSION_DENIED:
            myDiv.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            myDiv.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            myDiv.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            myDiv.innerHTML = "An unknown error occurred."
            break;
    }
}


