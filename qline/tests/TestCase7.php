<script>
$.ajaxSetup({
    beforeSend: function (xhr)
    {
        xhr.setRequestHeader("access_token","token");
        xhr.setRequestHeader("user_id","id");        
    }
});
</script>

<script>
    var myHeaders = new Headers(); // Currently empty
    //myHeaders.append('Content-Type', 'image/jpeg');
    myHeaders.set('access_token', 'token');
    myHeaders.set('user_id', 'id');
</script>

<script>
$.ajax({
    beforeSend: function(xhrObj){
        xhrObj.setRequestHeader("Content-Type","application/json");
        xhrObj.setRequestHeader("Accept","application/json");
    }
    type: "POST",
    url: "/article",
    processData: false,
    data: jsonData,
    dataType: "json",
    success: function(json){
        //do something...
    }
});
</script>

<script>
// 1. Create a new XMLHttpRequest object
let xhr = new XMLHttpRequest();

// 2. Configure it: GET-request for the URL /article/.../load
xhr.open('GET', '/article/xmlhttprequest/example/load');

// 3. Send the request over the network
xhr.send();

// 4. This will be called after the response is received
xhr.onload = function() {
  if (xhr.status != 200) { // analyze HTTP status of the response
    alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
  } else { // show the result
    alert(`Done, got ${xhr.response.length} bytes`); // responseText is the server
  }
};

xhr.onprogress = function(event) {
  if (event.lengthComputable) {
    alert(`Received ${event.loaded} of ${event.total} bytes`);
  } else {
    alert(`Received ${event.loaded} bytes`); // no Content-Length
  }

};

xhr.onerror = function() {
  alert("Request failed");
};
</script>