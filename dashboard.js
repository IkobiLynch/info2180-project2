window.addEventListener("load", function(){
    
    let all_btn = document.querySelector(".all");
    let sl_btn = document.querySelector(".sl");
    let sup_btn = document.querySelector(".s");
    let atm_btn = document.querySelector(".atm");
    let result = document.querySelector(".result");
    

    let url = `dashboard.php?filter=All`;
        console.log(url);
        
        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;

        });

        
        
    

    all_btn.addEventListener("click", function(event){
        event.preventDefault();
        
        let url = `dashboard.php?filter=All`;
        console.log(url);

        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;
            function dummy(){
                let link = document.getElementsByClassName("link");
                console.log(link);
                for (let index = 0; index < link.length; index++) {
                    link.item(index).addEventListener("click",function(event){
                        event.target.preventDefault;
                        console.log("i was clicked");
                        let element = link.item(index);
                        let url = `dashboard.php?id=${element.id}`;
                    
        
                        fetch(url)
                            .then(function (response) {
                            if (response.ok) {
                            return response.text();
                            } else {
                            throw new Error(response.statusText);
                            }
                        })
                        .then(function (data) {
                            result.innerHTML = data;
                        });
                    }
                    
                )}
            }
            setTimeout(dummy,100);
        });
    })

    sl_btn.addEventListener("click", function(event){
        event.preventDefault();

        let url = `dashboard.php?filter=SalesLead`;

        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;
            function dummy(){
                let link = document.getElementsByClassName("link");
                console.log(link);
                for (let index = 0; index < link.length; index++) {
                    link.item(index).addEventListener("click",function(event){
                        event.target.preventDefault;
                        console.log("i was clicked");
                        let element = link.item(index);
                        let url = `dashboard.php?id=${element.id}`;
                    
        
                        fetch(url)
                            .then(function (response) {
                            if (response.ok) {
                            return response.text();
                            } else {
                            throw new Error(response.statusText);
                            }
                        })
                        .then(function (data) {
                            result.innerHTML = data;
                        });
                    }
                    
                )}
            }
            setTimeout(dummy,100);
        });
    })

    sup_btn.addEventListener("click", function(event){
        event.preventDefault();

        let url = `dashboard.php?filter=Support`;

        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;
            function dummy(){
                let link = document.getElementsByClassName("link");
                console.log(link);
                for (let index = 0; index < link.length; index++) {
                    link.item(index).addEventListener("click",function(event){
                        event.target.preventDefault;
                        console.log("i was clicked");
                        let element = link.item(index);
                        let url = `dashboard.php?id=${element.id}`;
                    
        
                        fetch(url)
                            .then(function (response) {
                            if (response.ok) {
                            return response.text();
                            } else {
                            throw new Error(response.statusText);
                            }
                        })
                        .then(function (data) {
                            result.innerHTML = data;
                        });
                    }
                    
                )}
            }
            setTimeout(dummy,100);
        });
    })

    atm_btn.addEventListener("click", function(event){
        event.preventDefault();

        let url = `dashboard.php?filter=atm`;

        fetch(url)
        .then(function (response) {
            if (response.ok) {
            return response.text();
            } else {
            throw new Error(response.statusText);
            }
        })
        .then(function (data) {
            result.innerHTML = data;
            function dummy(){
                let link = document.getElementsByClassName("link");
                console.log(link);
                for (let index = 0; index < link.length; index++) {
                    link.item(index).addEventListener("click",function(event){
                        event.target.preventDefault;
                        console.log("i was clicked");
                        let element = link.item(index);
                        let url = `dashboard.php?id=${element.id}`;
                    
        
                        fetch(url)
                            .then(function (response) {
                            if (response.ok) {
                            return response.text();
                            } else {
                            throw new Error(response.statusText);
                            }
                        })
                        .then(function (data) {
                            result.innerHTML = data;
                        });
                    }
                    
                )}
            }
            setTimeout(dummy,100);
        });
    })

    // link.forEach(element => {
    //     element.addEventListener("click", function(event){
    //         event.target.preventDefault;
    //         let id = event.target.id;
    //         let url = `dashboard.php?id=${id}`;
    //         console.log(id);
    
    //         fetch(url)
    //         .then(function (response) {
    //             if (response.ok) {
    //             return response.text();
    //             } else {
    //             throw new Error(response.statusText);
    //             }
    //         })
    //         .then(function (data) {
    //             result.innerHTML = data;
    //         });
    //     })
    // });
    


    // forlink.forEach(element => {
    //     element.addEventListener("click", function(event){
    //         event.target.preventDefault;
    //         let id = event.target.id;
    //         let url = `dashboard.php?id=${id}`;
    //         console.log(id);
    
    //         fetch(url)
    //         .then(function (response) {
    //             if (response.ok) {
    //             return response.text();
    //             } else {
    //             throw new Error(response.statusText);
    //             }
    //         })
    //         .then(function (data) {
    //             result.innerHTML = data;
    //         });
    //     })
    // });


    function dummy(){
        let link = document.getElementsByClassName("link");
        console.log(link);
        for (let index = 0; index < link.length; index++) {
            link.item(index).addEventListener("click",function(event){
                event.target.preventDefault;
                console.log("i was clicked");
                let element = link.item(index);
                let url = `dashboard.php?id=${element.id}`;
            

                fetch(url)
                    .then(function (response) {
                    if (response.ok) {
                    return response.text();
                    } else {
                    throw new Error(response.statusText);
                    }
                })
                .then(function (data) {
                    result.innerHTML = data;
                });
            }
            
        )}
    }
    setTimeout(dummy,100);
        
    
})