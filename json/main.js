// JSON
// .stringify() -> json_encode() => JSON FORMAT
// .parse() -> json_decode() => Convert JSON to Object in JS or Array in PHP

// fetch() => 

// CHAIN METHOD
// fetch("http://localhost/PHP2/json/data.php", { method: 'GET' })
//     .then(function (res) {
//         return res.json()
//         // console.log(res)
//     })
//     .then(function(data) {
//         console.log(data)
//     })

// ASYNC / AWAIT
const getTodoItems = async () => {
    const request = await fetch("http://localhost/PHP2/json/data.php")
    const data = await request.json()

    console.log(data)
    
    data.forEach(item => {
        // Created a new p element
        const p = document.createElement("p")
        p.innerHTML = item.task
        document.body.appendChild(p)
    })
}

getTodoItems()