var database={
    "menu":{
        "dropdown":{
            "value":{
            "xiaomi":["#"],
            "realmi":["#"],
            "Nokia":["#"],
            "lenovo":["#"]
            }
        },
        "link":{
            "value":{
            "home":["01"],
            "produk":["02"],
            "produk":["03"],
            "rekomendasi":["04"]
            }
        },
    }
};
// database.menu.dropdown.value.forEach(el=>{
//     alert(el);    
// });
var menu_dropdown_temp="";

var menu_dropdown_key=Object.keys(database.menu.dropdown.value);

// alert(menu_dropdown_key.length);



for(x=0;x<menu_dropdown_key.length;x++){
    // alert(menu_dropdown_key[x]);
    // yg bawah ini yg diketahui pagar
    // alert(database.menu.dropdown.value[menu_dropdown_key[x]]);


    // console.log(database.menu.dropdown.value);tidak jadi
menu_dropdown_temp+=`<a class="dropdown-item" href="`+database.menu.dropdown.value[menu_dropdown_key[x]]+`">`+menu_dropdown_key[x]+`</a>`;
}

$('#menu_dropdown').html(menu_dropdown_temp);

// link menu

var menu_link_temp="";

var menu_link_key=Object.keys(database.menu.link.value);





for(x=0;x<menu_link_key.length;x++){
   
menu_link_temp+=`<li class="nav-item">
<a class="nav-link" href="#">pot</a>
</li>`;


}

$('#menu_link').html(menu_link_temp);