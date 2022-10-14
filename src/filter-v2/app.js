const body = document.querySelector('body');
const resultsHolder = document.getElementById('result');
let category;
let projectType = [];

body.addEventListener('click', (e) => {
    const isButton = e.target.nodeName === 'BUTTON';
    if (!isButton) {
       return;
    }
    document.getElementById("myDropdown").classList.toggle("show");
 })

 body.addEventListener('input', (e) => {
    //Check kind of input
    if(e.target.type === 'radio') {
        //Save value
        category = e.target.value;
    }else if(e.target.type === 'checkbox' && e.target.checked === true) {
        //Save value
        projectType.push(e.target.id);
    } else if(e.target.type === 'checkbox' && e.target.checked === false) {
        //Remove value
        projectType.splice(projectType.indexOf(e.target.id), 1);
    }

    filterCustomers();
 })

 // Filter customers
 function filterCustomers() {
    $.ajax({
       url : 'src/filter-v2/filter.php',
       type : 'POST',
       data: {
          category: (category ? category : ""),
          projectType: (projectType ? projectType : ""), 
       },
       success : function (result) {
        resultsHolder.innerHTML = "<pre>" + JSON.stringify(JSON.parse(result), null, 2) + "</pre>";
       },
       error : function () {
          console.log ('error');
       }
    });
 }

 filterCustomers();