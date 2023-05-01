jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
};

$(document).ready(function () {
    $("#searchTags").keyup(function(){
        var value = $("#searchTags").val();
        if(value.length==0){
	
            $("#menuFull tr").show();

        }else{
            $("#menuFull tr").hide();
            $("#menuFull tr:contains("+value+")").show();

        }

    });

});
   
 setInterval(function() {
    $.ajax({
      url: 'table.php',
      success: function(data) {
        $('#tb tbody').html(data);
      }
    });
  }, 60000);


 $('#resim-s').on('change', function() {
      var file = this.files[0];
      if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#resim').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
      }
    });
  
    var mpopup  = document.getElementById('pencereKutu');
    var mpLink  = document.getElementById("pencereLink");  
    var close   = document.getElementsByClassName("kapat")[0];
    mpLink.onclick = function() {
    mpopup.style.display = "block";
    }
    close.onclick = function() {
    mpopup.style.display = "none";
    }
    window.onclick = function(event) {
    if (event.target == mpopup) {
      mpopup.style.display = "none";
    }
    } 
