getBtn.addEventListener("click", getUser);

getUser();
function getUser() {
    fetch('https://fakestoreapi.com/products/1')

    .then(res=>res.json())     

    .then(json=>console.log(json))
}
