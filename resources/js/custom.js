const selectElement = (el) =>{
    return document.querySelector(el);
}

selectElement(".spinningIcon").style.display ="none";

selectElement(".nonAjaxForm").addEventListener("submit", function(){
    selectElement(".spinningIcon").style.display ="block";
})
