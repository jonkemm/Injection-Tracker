function fill() {
    document.getElementById("bg-img").onclick = function (o) {
        let c = o.target.getBoundingClientRect();
        document.getElementById("x_coord").value = Math.round(o.clientX - c.left),
        document.getElementById("y_coord").value = Math.round(o.clientY - c.top),
        document.getElementById("qty").value = document.getElementById("qty_menu").value,
        document.getElementById("myModal").style.display = 'block';
    }
}
function deleteSite(site) {
    document.delete.action='/site/'+site;
    document.getElementById('myModal').style='display:block';
}