function fetchData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = this.responseText;
        // Code to process the data returned by the PHP script
      }
    };
    xhttp.open("GET", "../php/register.php", true);
    xhttp.send();
  }