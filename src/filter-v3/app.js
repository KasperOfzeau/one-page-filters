$(function() {
    const body = document.querySelector('body');
    const resultsHolder = document.getElementById('result');
    let type;
    let branche;
    let size;
 
    body.addEventListener('click', (e) => {
        const isButton = e.target.nodeName === 'BUTTON';
        if (!isButton) {
           return;
        }
       
       type = document.getElementById('type').value; 
       branche = document.getElementById('branche').value;
       size = document.getElementById('size').value;
        console.log(branche)
       filterCustomers();
    })
 
    function filterCustomers() {
       $.ajax({
          url : 'src/filter-v3/filter.php',
          type : 'POST',
          data: {
             type: (type ? type : ""),
             branche:(branche ? branche : ""), 
             size:(size ? size : ""),
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
 });