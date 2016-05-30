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
        
            url: "/scorehub2.0/public/gaa",                     
            success: function(data) {
                $("#gaa").html(data);
            }
        }); 
    }

    function soccer() { 

        $.ajax({ 
        
            url: "/scorehub2.0/public/soccer",                     
            success: function(data) {
                $("#soccer").html(data);
            }
        }); 
    }

    function rugby() { 

        $.ajax({ 
        
            url: "/scorehub2.0/public/rugby",                     
            success: function(data) {
                $("#rugby").html(data);
            }
        }); 
    }

    gaa();
    soccer();
    rugby();


});