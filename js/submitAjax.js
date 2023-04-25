
const form = document.getElementById("addform");
form.onsubmit = (ev) => {
    ev.preventDefault();
    const bodyData = new FormData(form);
    // todo : make warning to user
    if (bodyData.get('name') === null || 
        bodyData.get('title') === null ||
        bodyData.get('picture') === null)
        return;
    
    fetch("./api/addHeroes.php", {
        body:  bodyData ,
        method: 'post'
    })
    .then(res => {
        if (res.ok)
            return res.text();
        else
            throw Error("Api send not 200");
    })
    .then(json => {
        /// todo : make method async update first page
        console.log("submitAjax success", json);
        alert('ready!!! reload the page!')
    })
    .catch(error => {
        console.log('submitAjax failure', error);
        alert('something went wrong, not added!')
    });
};