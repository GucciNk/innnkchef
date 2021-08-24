
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for(let i=0; i < menuLength;i++){
    if(menuItem[i].href === currentLocation){
        menuItem[i].className = "active nav-link"
    }
}
var indicator = document.getElementById("added");
var purchased = 0;
function added(purchased){
     purchased++;

    }
