async function getAbout() {


    await fetch('/cards.html').then(res => res.text()).then(data => {
        document.querySelector('.container').innerHTML = data;

    }).then(() => {

        // after fetch write js code here
    })}

getAbout();