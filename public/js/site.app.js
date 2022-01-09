function fill() {
  document.getElementById("bg-img").onclick = function (o) {
    var c = o.target.getBoundingClientRect();
    document.getElementById("x_coord").value = Math.round(o.clientX - c.left), document.getElementById("y_coord").value = Math.round(o.clientY - c.top), document.getElementById("qty").value = document.getElementById("qty_menu").value, document.getElementById("myModal").style.display = 'block';
  };
}

function jk(site, text, noteid) {

  if (text!='') {
    document.getElementById('form-update').style = 'display:block;';
    document.getElementById('form-create').style = 'display:hide;';
    document["form-update"].action = '/app/note/update/' + noteid;
    document["delete"].action = '/app/site/' + site;
    document.getElementById("comment-update").value = text;
  }
  else {
    document.getElementById('form-create').style = 'display:block;';
    document.getElementById('form-update').style = 'display:hide;';
    document["form-create"].action = '/app/note/create/' + site;
  }
  document.getElementById('myModal2').style = 'display:block;';
  document["delete"].action = '/app/site/' + site;
}

function showPwd() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}