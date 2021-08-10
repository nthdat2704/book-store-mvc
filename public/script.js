var close = document.getElementsByClassName("close");





var urlarr = (window.location.href.split("/"));
var arr = Array.from(document.getElementsByClassName('edit-btn'));
arr.forEach(function(element) {
    element.addEventListener("click", function() {
        var check = element.parentNode.parentNode;
        document.querySelector(".section-content-edit").style.display = "block";
        document.querySelector(".overlayer").classList.add("active-overlayer");;
        var selecttd = check.querySelectorAll("td");

        selecttd = Array.from(selecttd);
        var get = selecttd.map(function(e) {
            return e.textContent;

        })

        console.log(selecttd);
        console.log(get);
        var form = document.querySelector("form")
        if (urlarr[5] == "product") {

            document.getElementById("id").value = parseInt(get[0]);
            document.getElementById("idsp").value = parseInt(get[0]);
            document.getElementById("name").value = get[1]
            document.getElementById("price").value = get[3]
            document.getElementById("detail").value = get[4]
        }
        if (urlarr[5] == "categories") {

            document.getElementById("id").value = parseInt(get[0]);
            document.getElementById("name").value = get[1];
            document.getElementById("anhien").value = get[2]

        }
        if (urlarr[5] == "user") {

            document.getElementById("iduser").value = parseInt(get[0]);
            document.getElementById("name").value = get[1];
            document.getElementById("password").value = get[2]
            document.getElementById("hoten").value = get[3]
            document.getElementById("sdt").value = get[4]
            document.getElementById("email").value = get[5]
            document.getElementById("date").value = get[7]

        }
        if (urlarr[5] == "orders") {

            document.getElementById("idBill").value = parseInt(get[0]);
            document.getElementById("iduser").value = get[1];
            document.getElementById("billname").value = get[2]
            document.getElementById("address").value = get[3]
            document.getElementById("ngayDatHang").value = get[4]
            document.getElementById("tongtien").value = get[5]
            document.getElementById("email").value = get[6]
            document.getElementById("billtel").value = get[7]

        }


        let close = document.getElementById("close");
        close.addEventListener("click", function() {
            document.querySelector(".section-content-edit").style.display = "none";
            document.querySelector(".overlayer").classList.remove("active-overlayer");
        })

    })

})
document.getElementById('add').addEventListener("click", function() {
    document.querySelector(".section-content-add").style.display = "block";
    document.querySelector(".overlayer").classList.add("active-overlayer");
    close[0].addEventListener("click", function() {
        document.querySelector(".section-content-add").style.display = "none";
        document.querySelector(".overlayer").classList.remove("active-overlayer");

    })

})


// console.log(document.getElementsByClassName('edit-btn')[0].parentNode.parentNode)