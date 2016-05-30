$(document).ready(function() { //jQuery code, everything in here will load when the DOM is ready 

    var myRug = setInterval(function() {
                    showrugby()
                }, 2000);
    var mySoc = setInterval(function() {
                    showsoccer()
                }, 2000);
    var myGaa = setInterval(function() {
                    showgaa()
                }, 2000);
    // setInterval(function(){
    //   $('#showgaa').load('/scorehub2.0/public/demo.txt');
    // },5000);

    function showrugby() { //shows the printfan.php page in the bigbox div
          
        var game_id = $('#game_id').val();

        $.ajax({ //requesting the page asynchronously when the function is called
        
            url: "/scorehub2.0/public/showonerugby/"+game_id,                     
            success: function(data) {
                $("#showrugby").html(data);
            }
        }); 

                    
    }

    function showsoccer() { //shows the printfan.php page in the bigbox div
          
        var game_id = $('#game_id').val();

        $.ajax({ //requesting the page asynchronously when the function is called
        
            url: "/scorehub2.0/public/showonesoccer/"+game_id,                     
            success: function(data) {
                $("#showsoccer").html(data);
            }
        }); 

                    
    }


    function showgaa() { //shows the printfan.php page in the bigbox div
          
        var game_id = $('#game_id').val();

        $.ajax({ //requesting the page asynchronously when the function is called
        
            url: "/scorehub2.0/public/showonegaa/"+game_id,                     
            success: function(data) {
                $("#showgaa").html(data);
            }
        }); 

                    
    }

    showsoccer();
    showgaa();
    showrugby();

      $("#undo").click(function() { 
                    
        var game_id = $("#game_id").val();
        // var last_score1 = $("#last_score1").val();
        
        var dataString = 'game_id='+game_id;
        
        {
        
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type:"POST",
                url: "/scorehub2.0/public/games/"+game_id+"/undo",
                data: dataString,
                cache: false,
                success: console.log('score ' + dataString + ' deleted')
            });
        }
     });
   


    $("#goal").click(function() { //when goal button is clicked, data is sent to DB

     

        var team_name = $("#team_name1").val(); //set the values to those in those in the form
        var goal = $("#goal").val();
        var point = $("#point").val();
        var game_id = $("#game_id").val();
        goal = 1;
        point = 0;
        conversion = 0;
        penalty = 0;
        try_score = 0;

         // Returns successful showScore() method when the entered information is stored in database.
        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#point").click(function() { //when goal button is clicked, data is sent to DB

     

        var team_name = $("#team_name1").val(); //set the values to those in those in the form
        var goal = $("#goal").val();
        var point = $("#point").val();
        var game_id = $("#game_id").val();
        point = 1;
        goal = 0;
        conversion = 0;
        penalty = 0;
        try_score = 0;

         // Returns successful showScore() method when the entered information is stored in database.
        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

        $("#goal1").click(function() { //when goal button is clicked, data is sent to DB

     

        var team_name = $("#team_name2").val(); //set the values to those in those in the form
        var goal = $("#goal1").val();
        var point = $("#point1").val();
        var game_id = $("#game_id").val();
        goal = 1;
        point = 0;
        conversion = 0;
        penalty = 0;
        try_score = 0;

         // Returns successful showScore() method when the entered information is stored in database.
        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#point1").click(function() { //when goal button is clicked, data is sent to DB

     

        var team_name = $("#team_name2").val(); //set the values to those in those in the form
        var goal = $("#goal1").val();
        var point = $("#point1").val();
        var game_id = $("#game_id").val();
        point = 1;
        goal = 0;
        conversion = 0;
        penalty = 0;
        try_score = 0;

         // Returns successful showScore() method when the entered information is stored in database.
        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#try_score").click(function() { 

        var team_name = $("#team_name1").val(); //set the values to those in those in the form
        var goal = $("#goal").val();
        var point = $("#point").val();
        var game_id = $("#game_id").val();
        var try_score = $("#try_score").val();
        var conversion = $("#conversion").val();
        var penalty = $("#penalty").val();
        try_score = 1;
        goal = 0;
        point = 0;
        conversion = 0;
        penalty = 0;

        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#try_score1").click(function() { 

        var team_name = $("#team_name2").val(); //set the values to those in those in the form
        var goal = $("#goal1").val();
        var point = $("#point1").val();
        var game_id = $("#game_id").val();
        var try_score = $("#try_score1").val();
        var conversion = $("#conversion1").val();
        var penalty = $("#penalty1").val();
        try_score = 1;
        goal = 0;
        point = 0;
        conversion = 0;
        penalty = 0;

        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#conversion").click(function() { 

        var team_name = $("#team_name1").val(); //set the values to those in those in the form
        var goal = $("#goal").val();
        var point = $("#point").val();
        var game_id = $("#game_id").val();
        var try_score = $("#try_score").val();
        var conversion = $("#conversion").val();
        var penalty = $("#penalty").val();
        try_score = 0;
        goal = 0;
        point = 0;
        conversion = 1;
        penalty = 0;

        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#conversion1").click(function() { 

        var team_name = $("#team_name2").val(); //set the values to those in those in the form
        var goal = $("#goal1").val();
        var point = $("#point1").val();
        var game_id = $("#game_id").val();
        var try_score = $("#try_score1").val();
        var conversion = $("#conversion1").val();
        var penalty = $("#penalty1").val();
        try_score = 0;
        goal = 0;
        point = 0;
        conversion = 1;
        penalty = 0;

        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#penalty").click(function() { 

        var team_name = $("#team_name1").val(); //set the values to those in those in the form
        var goal = $("#goal").val();
        var point = $("#point").val();
        var game_id = $("#game_id").val();
        var try_score = $("#try_score").val();
        var conversion = $("#conversion").val();
        var penalty = $("#penalty").val();
        try_score = 0;
        goal = 0;
        point = 0;
        conversion = 0;
        penalty = 1;

        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });

    $("#penalty1").click(function() { 

        var team_name = $("#team_name2").val(); //set the values to those in those in the form
        var goal = $("#goal1").val();
        var point = $("#point1").val();
        var game_id = $("#game_id").val();
        var try_score = $("#try_score1").val();
        var conversion = $("#conversion1").val();
        var penalty = $("#penalty1").val();
        try_score = 0;
        goal = 0;
        point = 0;
        conversion = 0;
        penalty = 1;

        var dataString = 'team_name=' + team_name +'&try_score=' +try_score +'&conversion='+conversion 
                        +'&point=' +point +'&goal=' + goal +'&penalty='+penalty+'&game_id=' + game_id;
        {
        // AJAX Code To Submit Form, takes a hash with these settings:
            $.ajax({
                headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: "/scorehub2.0/public/games/"+game_id+"/scores",
                data: dataString,
                cache: false,
                success: console.log('Message ' + dataString + ' added')
                
            });
        }
        return false;

    });
});

//# sourceMappingURL=matchFunctions.js.map
