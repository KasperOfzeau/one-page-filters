$(function() {
   const body = document.querySelector('body');
   let branche;
   let search;

   body.addEventListener('click', (e) => {
      const isButton = e.target.nodeName === 'BUTTON';
      if (!isButton) {
         return;
      }
      branche = e.target.dataset.id;
      filterCustomers();
   })

   const input = document.querySelector('input');
   const resultsHolder = document.getElementById('result');

   input.addEventListener('input', (e) => {
      search = e.target.value;
      filterCustomers();
   });
   input.addEventListener('propertychange', (e) => {
      search = e.target.value;
      filterCustomers();
   });

   function filterCustomers() {
      $.ajax({
         url : 'src/filter-v1/filter.php',
         type : 'POST',
         data: {
            search: (search ? search : ""),
            branche:(branche ? branche : ""), 
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