function onOff() {
    document
        .querySelector('#modal')
        .classList
        .toggle("hide")

    document
        .querySelector("body")
        .classList
        .toggle("hideScroll")
}

document
    .querySelectorAll('form')
    .addEventListener('click', (event) => {
        event.preventDefault();
    })
