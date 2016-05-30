function refreshDiv(){
    
    $("#bigbox").load("/scorehub2.0/public/crap");
}

setInterval(function()
{
   refreshDiv();
}, 5000);
//# sourceMappingURL=app.js.map
