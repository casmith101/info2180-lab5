window.onload = function() {

    var lookUpBtn = document.querySelector('#lookup');
    var httpRequest = new XMLHttpRequest();
    var country= document.querySelector('#country');

    lookUpBtn.addEventListener('click', function(element) {
        element.preventDefault();

        fetch("world.php?country=" + country.value)
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
        })
        .then(data => {
            let result = document.querySelector('#result');
            result.innerHTML = data;
        })
        .catch(error => console.log('There was an error' + error));
    })    

}