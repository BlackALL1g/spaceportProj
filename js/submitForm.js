const form = document.getElementById("addform");
form.onsubmit = (ev) => {
    ev.preventDefault();
    const bodyData = new FormData(form);
    // todo : make warning to user
    if (bodyData.get('name') === null || bodyData.get('title') === null || bodyData.get('picture') === null && bodyData.get('container')=== null)
        // console.log();
        return;
    //  && bodyData.get('container') i tried to set up dnd
    // Also !!!
    // don't forget to try it out in teamMaker.
    // form.ondrag
    
    fetch("./api/postHeroes.php", {
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
        console.log("submit success", json);
        
        // fetch the latest data and update the content on the page
        fetch("./api/getHeroes.php")
        .then(res => {
            if (res.ok)
                return res.json();
            else
                throw Error("Api send not 200");
        })
        .then(data => {
            // update the content on the page
            const wrapper = document.querySelector('.swiper-wrapper');
            wrapper.innerHTML = '';
            data.forEach(item => {
                const slide = document.createElement('div');
                slide.classList.add('swiper-slide', 'slide');
                slide.innerHTML = `
                
                    <img src="${item.picture}" alt="img">

                    <div class="content">
                        <h3>${item.name}</h3>
                        <p>${item.title}</p>
                        
                    </div>
                `;
                wrapper.appendChild(slide);
            });
            
            alert('ready!!! The page has been updated!');
            // window.location.href("#page2");
        })
        .catch(error => {
            console.log('getHeroes failure', error);
            alert('something went wrong while updating the page!');
        });
    })
    .catch(error => {
        console.log('submit failure', error);
        alert('something went wrong, not added!');
    });
};