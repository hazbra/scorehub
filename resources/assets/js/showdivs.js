$(document).ready(function() {
	 
	 var ga = setInterval(function() {
                    gaa()
                }, 2000);
	 var soc = setInterval(function() {
                    soccer()
                }, 2000);
	 var rug = setInterval(function() {
                    rugby()
                }, 2000);

	 function gaa() { 

        $.ajax({ 
        
            url: "/gaa",                     
            success: function(data) {
                $("#gaa").html(data);
            }
        }); 
    }

    function soccer() { 

        $.ajax({ 
        
            url: "/soccer",                     
            success: function(data) {
                $("#soccer").html(data);
            }
        }); 
    }

    function rugby() { 

        $.ajax({ 
        
            url: "/rugby",                     
            success: function(data) {
                $("#rugby").html(data);
            }
        }); 
    }

    gaa();
    soccer();
    rugby();


});