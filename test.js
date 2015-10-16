$(document).ready(function() {

$('td').dblclick(function()
{
  var OriginalContent = $(this).text();
  var cr = 13

  $(this).addClass("cellEditing");
  $(this).html("<input type='text' value='" + OriginalContent + "' />");
  $(this).children().first().focus();

  $(this).children().first().keypress(function (e) {
            if (e.which == cr) {
                var newContent = $(this).val();
                $(this).parent().text(newContent);
                $(this).parent().removeClass("cellEditing");
            }
        });

});

});
