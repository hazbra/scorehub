/******************JavaScript StopWatch library: *********************
http://wonderwebware.com/javascript-time/ 
*/

function toTime(_time) {
    if (_time == null) return '';
    if (_time.negative) return ('-' + _time.hh + ':' + _time.mm + ':' + _time.ss);
    return (_time.hh + ':' + _time.mm + ':' + _time.ss);
}

/* create stopWatch and backWatch objects */
var stopWatch = new jtl.stopWatch();

/* executed on "start" link clicked: */
function start() {
    if (stopWatch.start() != null) {
        stopWatch.executeOnRefresh(refresh); //function to execute on refresh
        var value = stopWatch.splittime();
        $('#timer').find('.value').text(toTime(value));
    }
}

function resettimer() {
    /* on "reset" button clicked -- clear all values*/
    if (stopWatch.resettime() == false) return; //on error (started timer) it returns false; stop timer first!  
    $('#timer').find('.value').text('00:00:00');
    $('#split_times').html('');

}

/* will execute when "stop" is clicked */
function stop() {
    var value = stopWatch.stoptime();
    if (value == null) return; //no time returned, timer not started?
    $('#timer').find('.value').text(toTime(value));
    //var curr=$('#split_times').html();    
    //$('#split_times').html(curr+'<br />'+toTime(value));  
}

/* get the "split" time (without stopping timer) */
function split() {
    var value = stopWatch.splittime();
    if (value == null) return;
    $('#timer').find('.value').text(toTime(value));
    var curr = $('#split_times').html();
    $('#split_times').html(curr + '<br />' + toTime(value));
    //alert(toTime(value)); 
    document.getElementById('counter').value = toTime(value); //assigns the time of the score to 'counter' value
}

/* visualize time in the stopWatch #timer div */
function refresh() {
    var value = stopWatch.splittime();
    if (value != null) $('#timer').find('.value').text(toTime(value));
}
//# sourceMappingURL=clockFunctions.js.map
