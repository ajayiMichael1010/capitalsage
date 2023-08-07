const selectElement = (el) =>{
    return document.querySelector(el);
}

selectElement(".spinningIcon").style.display ="none";

//Make spinner visible
selectElement(".nonAjaxForm").addEventListener("submit", function(){
    selectElement(".spinningIcon").style.display ="block";
});


