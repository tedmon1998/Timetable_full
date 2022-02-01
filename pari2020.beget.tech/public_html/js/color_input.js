$oo = "ds";
$(document).ready(function()
{
      $('input').on('focus',function(){
          var ids = ($(this).attr('id'));
            setInterval(function()
            {
                var x = document.getElementById(ids).value;
                var dl = x.length;
                if(dl>17) document.getElementById(ids).style.backgroundColor = "#ff0000";
                else if(dl>15) document.getElementById(ids).style.backgroundColor = "#ffff00";
                else document.getElementById(ids).style.backgroundColor = "#ffffff";
            }, 50);
      });
    
});