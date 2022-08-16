// VARIABLES
const ulScreen = document.querySelector("[data-screen]")

// FUNCTIONS
const getData = async () => {
    const request = await fetch("./data.json");
    const response = await request.json()
    return response.author
}
const getBookData = async () => {
    const request = await fetch("./data.json");
    const response = await request.json()
    return response.books
}

const printAuthorsInScreen = async () => {
    // const authors = await getData()
    const authors = await getData()

    authors.forEach(author => {
        // Create the list item
        const li = document.createElement("li")
        li.innerText = author
        // Add to the ul element
        ulScreen.appendChild(li)
    })
}

const printBookNameInScreen = async () => {
    // const authors = await getData()
    const books = await getBookData()

    books.forEach(obj => {
        // Create the list item
        const li = document.createElement("li")
        li.innerText = obj['name']
        // Add to the ul element
        ulScreen.appendChild(li)
    })
}

// printAuthorsInScreen()
printBookNameInScreen()

// EVENTS
window.addEventListener("click", () => alert("clicked"))