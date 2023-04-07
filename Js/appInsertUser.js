$(document).ready(function () {


  $('#search').keyup(function (e) {
    if ($('#search').val()) {

        let search = $('#search').val().trim();
        
        $.ajax({
          url: '../backend/client-search.php',
          type: 'POST',
          data: { search: search },
          success: function (response) {
            if(response == 'Cliente no registrado') {
              $('#cardContainer').html(response);
            }
            else{
              alert(response);
              let users = JSON.parse(response);
              let template = '';
              users.forEach(user => {
                template += 
                `<li>
                   <a href="#" class="ClientId" id="${user.id}"> ${user.Identifacion}  ${user.nombres}</a>
                  </li>`
            });
              
            $('#cardContainer').html(template);   
          }
        }
      })

    }
});

  $('#form').submit(function(e){
      e.preventDefault();
      const postData = {
      
      ruc:  $('#ruc').val(),    
      name: $('#name').val(),
      surname :  $('#surname').val(),
      email: $('#email').val(),
      direccion: $('#direccion').val(),
      telefono: $('#cell').val(),
      };
      
      let url = '../backend/client-add.php'; 
      $.post( url , postData, function(response) {

          alert(response);
          $('#form').trigger('reset');
          
      })
      
  })

    
})


  $(document).on('click','.ClientId', function(){

    
      let element = $(this)[0];
      let id = $(element).attr('id');

      
    $.ajax({
        url: '../backend/client-single.php',
        type: 'POST',
        data: { id: id },
        success: function (response) {
          let users = JSON.parse(response);
              let template = '';
              users.forEach(user => {
               alert(user);
            });
        
      }
  })
})
  

