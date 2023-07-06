window.onload=()=>{
    let arrayDivs;
    const urlreadMore=document.querySelectorAll(".read-more");
    urlreadMore.forEach( urlread=> {
        urlread.addEventListener("click",(event)=>{
            const urlGit=urlread.parentNode.querySelector(".urlGit");
            const computedStyle = window.getComputedStyle(urlGit);

            if (computedStyle.display === "none") {
              urlGit.style.display = "block";
              urlread.textContent = "Read Less";
            } else {

              urlGit.style.display = "none";
              urlread.textContent = "Read More";
            }
            const clickedId=event.target.parentNode.id;
            if((clickedId==1 || clickedId==2))
            {
                const clickedDiv = urlread.parentNode;
                const clickedDivHeight = clickedDiv.offsetHeight;
                arrayDivs=document.querySelectorAll(".col-sm-4");
                arrayDivs.forEach(div=>{
                    if (div !== clickedDiv) {
                        div.style.height = `${clickedDivHeight}px`;
                    }
                })
            }
        

         });    
    });    
};